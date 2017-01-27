<template>
    <div>
      <spinner :show="loading"></spinner>
      <h4 class="ui horizontal divider">
        <h2>الصفحات</h2>
      </h4>

      <div class="ui modal aeform">
        <div class="header">
            <h4  v-if="edit">تعديل صفحة</h4>
            <h4  v-if="!edit">إضافة صفحة جديده</h4>
        </div>
        <div class="content">
          <form class="ui form">
            <h4 class="ui dividing header">إ</h4>
            <div class="field">
              <label>العنوان</label>
              <input v-model="newPage.title" type="text" placeholder="العنوان">
            </div>
            <div class="field">
              <label>المحتوى</label>
              <div class="ui button btnclick">إظهر المحتورى</div>
              <!-- <textarea v-model="newPage.content"  type="text" placeholder="المحتوى"></textarea> -->
              <textarea id="textarea"></textarea>

            </div>
            <div class="field">
              <label>الحالة</label>
              <div class="ui fitted toggle checkbox">
                <input v-model="newPage.status" type="checkbox"> <label></label>
              </div>
            </div>
            <div class="field">
              <label>عنوان السيو</label>
              <input v-model="newPage.seo_title"  type="text" placeholder="العنوان فى محركات البحث">
            </div>
            <div class="field">
              <label>وصف السيو</label>
              <input v-model="newPage.seo_description"  type="text" placeholder="الوصف فى محركات البحث">
            </div>
          </form>

        </div>
        <div class="actions">
          <button class="ui black deny button">
            إلغاء
          </button>
          <button v-if="!edit" @click="AddNewPage" class="ui positive right labeled icon button">
            حفظ
            <i class="checkmark icon"></i>
          </button>

          <button v-if="edit" @click="EditPage" class="ui positive right labeled icon button">
            تعديل
            <i class="checkmark icon"></i>
          </button>
        </div>
      </div>
      <table class="ui compact celled definition table">
        <thead class="full-width">
          <tr>
            <th>
              <a class="ui mini poptop icon" @click="selectAll()" data-content="تحديد الكل"><i class="checkmark box icon"></i></a>
              <a class="ui red mini poptop icon" @click="DeleteSelected()" data-content="حذف المحدد"><i class="trash icon"></i></a>
            </th>
            <th><div class="ui transparent icon input"><input class="input"  type="text" v-model="searchKey" placeholder="ابحث ..." /><i class="search icon"></i></div></th>
            <th>الحالة</th>
            <th>المحتوى</th>
            <th>عمليات</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="page in filteredPages">
            <td class="collapsing">
              <div class="ui fitted slider checkbox">
                <input type="checkbox" v-model="pageIds" :value="page.id" > <label></label>
              </div>
            </td>
            <td>{{page.title}}</td>
            <td><i class="circle icon" :class="{'green': page.status,'grey' : !page.status }"></i> </td>
            <td>{{page.content.substring(0,90)}}...</td>
            <td>
              <div class="ui tiny buttons">
                <button class="ui left blue mini attached button icon" @click="ShowPage(page.id)"><i class="edit icon"></i></button>
                <button class="ui right red mini attached button icon" @click="RemovePage(page.id)"><i class="trash icon"></i></button>
              </div>
            </td>
          </tr>
        </tbody>

        <tfoot class="full-width">
          <tr>
            <th>
              <button :disabled="!pageIds" class="ui red <mini></mini> button icon" @click="DeleteSelected()" data-content="حذف السجلات المحدده"><i class="trash icon"></i></button>
            </th>
            <th colspan="4">
              <button @click="openForm" class="ui right floated small primary labeled icon button">
                <i class="user icon"></i> صفحة جديدة
              </button>
              <div class="ui floated pagination borderless menu">
                <a @click.prevent="fetchPage(prev_page_url)" :disabled="!prev_page_url" class="icon item">
                  <i class="right chevron icon"></i>
                </a>
                <div v-for="pageNumber in last_page" v-if="Math.abs(pageNumber - current_page) < 2 || pageNumber == last_page || pageNumber == 1">
                <a href="#" class="item" @click.prevent="fetchPage('/api/pages?page=' + pageNumber)"  :class="{'active': current_page === pageNumber}">{{ pageNumber }}</a>
                </div>
                <a @click.prevent="fetchPage(next_page_url)" :disabled="!next_page_url" class="icon item">
                  <i class="left chevron icon"></i>
                </a>
                <input type="text" v-model="pageNumber" value="">
              </div>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
</template>

<script>
import Spinner from './Spinner.vue'
export default {
  components: {
    Spinner
  },
  mounted() {
    console.log('Page Component ready.')
    this.fetchPage()
  },

  data : function() {
    return {
      loading: false,
      pages: [],
      allSelected: false,
      pageIds: [],
      pageNumber: '',
      newPage:{
        id: '',
        title: '',
        content: '',
        status: true,
        seo_title: '',
        seo_description: '',
      },
      searchKey: '',
      current_page : 1,
      last_page : 0,
      next_page_url : '',
      prev_page_url : '',
      first_page_url: '/api/pages',
      per_page: 0,
      total : 0,
      edit: false,
      form: false
    }
  },

  methods : {
    selectAll: function() {
        this.pageIds = [];
        if (!this.allSelected) {
            for (var page in this.pages) {
                this.pageIds.push(this.pages[page].id);
            }
            this.allSelected = true
        }else {
          this.allSelected = false
          this.pageIds = []
        }
    },

    fetchPage: function(page_url){
      this.loading = true
      page_url = page_url || '/api/pages'
      this.$http.get(page_url).then((response) => {
        this.makePagination(response.data.pages)
        this.pages = response.data.pages.data
        self = this
        setTimeout(function () {
          self.loading = false
        }, 1000)
      }, (response) => {
        console.log('Error fetch pages');
      })
    },

    makePagination: function(data){
      var getLocation = function(url) {
        if(url){
          var l = document.createElement("a");
          l.href = url;
          return l.pathname + l.search;
        }
      };
      this.current_page = data.current_page
      this.last_page = data.last_page
      this.next_page_url = getLocation(data.next_page_url)
      this.prev_page_url = getLocation(data.prev_page_url)
      this.total = data.total
      this.per_page = data.per_page

    },

    RemovePage: function (id) {
      var self = this;
      swal({
        title: 'هل أنت متأكد من الحذف?',
        text: "بعد الضغط على حذف لن تكون قادر على التراجع!",
        type: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'نعم, أحذف!',
      }).then(function() {
        self.$http.delete('/api/pages' + id).then((data) => {
          self.fetchPage()
        })
        swal({
          title: 'تم الحذف!',
          text: 'تم الحذف بنجاح .',
          type: 'success',
          showConfirmButton: false,
          timer: 1500
        }).done();
      },function() {
        swal({
          title: 'تم التراجع!',
          type: 'question',
          showConfirmButton: false,
          timer: 1500
        }).done();
      })
    },
    DeleteSelected: function () {
      var self = this
      swal({
        title: 'هل أنت متأكد من الحذف?',
        text: "بعد الضغط على حذف لن تكون قادر على التراجع!",
        type: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'نعم, أحذف!',
      }).then(function() {
        self.$http.delete('/api/pages' + self.pageIds).then((data) => {
          console.log(self.pageIds);
          self.fetchPage()
      })
        swal({
          title: 'تم الحذف!',
          text: 'تم الحذف بنجاح .',
          type: 'success',
          showConfirmButton: false,
          timer: 1500
        }).done();
      },function() {
        swal({
          title: 'تم التراجع!',
          type: 'question',
          showConfirmButton: false,
          timer: 1500
        }).done();
      })
    },

    ShowPage: function (id) {
      this.edit = true
      this.$http.get('/api/pages' + id).then((data) => {
        this.newPage.id = data.data.id
        this.newPage.title = data.data.title
        this.newPage.content = data.data.content
        this.newPage.status = data.data.status
        this.newPage.seo_title = data.data.seo_title
        this.newPage.seo_description = data.data.seo_description
        // document.forms[0].elements[0].focus();
        var self = this;
        $('.ui.modal.aeform').modal({
          closable  : false,
          onShow: function() {
            tinymce.init({
              selector: '#textarea',
              setup: function() {
                $('.btnclick').on('click', function(e) {
                  tinymce.activeEditor.setContent(self.newPage.content);
                });
              }
            });
          },
          onDeny    : function(){
            self.newPage = { title:'', content:'', status:true, seo_title:'', seo_description:''}
            // return false;
          }
        }).modal('show')
      })
    },

    EditPage: function(){
      this.newPage.content = tinyMCE.activeEditor.getContent()
      var page = this.newPage
      var id = page.id
      this.$http.patch('/api/pages' + id, page).then((data) => {
        this.newPage = { title:'', content:'', status:true, seo_title:'', seo_description:''}
        this.form = false
        swal({
          title: 'تم بنجاح!',
          text: 'لقد تم إنشاء صفحة جديدة!',
          type: 'success',
          showConfirmButton: false,
          timer: 1500
        }).done()
        this.fetchPage()
      })
      this.edit = false
    },

    AddNewPage: function(){
      // page input
      this.newPage.content = tinyMCE.activeEditor.getContent()
      var page = this.newPage

      // send post
      this.$http.post('/api/pages', page).then((data) => {
        this.newPage = { title:'', content:'', status:true, seo_title:'', seo_description:''}
        swal({
          title: 'تم بنجاح!',
          text: 'لقد تم إنشاء صفحة جديدة!',
          type: 'success',
          showConfirmButton: false,
          timer: 1500
        }).done()
        //Reload Page
        this.fetchPage()
      })
    },
    openForm: function () {
      $('.ui.modal.aeform').modal({
        closable  : true,
        onShow: function() {
          tinymce.init({
            selector: '#textarea',
          })
        },
        onDeny    : function(){
          self.newPage = { title:'', content:'', status:true, seo_title:'', seo_description:''}
          // return false;
        }
      }).modal('show')
      }


  },

  computed: {
    filteredPages: function () {
      var self = this
      return self.pages.filter(function (pages) {
        return pages.title.indexOf(self.searchKey) !== -1
      })
    },

  }
}
</script>
