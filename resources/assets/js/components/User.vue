<template>
    <div>
      <!-- <spinner :show="loading"></spinner> -->
      <h4 class="ui horizontal divider">
        <h2> الأعضاء</h2>
      </h4>

      <table class="ui compact celled definition table">

        <thead class="full-width">
          <tr>
            <th>تحديد</th>
            <th>الإسم</th>
            <th>الصلاحية</th>
            <th>البريد الإلكترونى</th>
            <th>عمليات</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="collapsing">
              <div class="ui red ribbon label">Admin</div>
            </td>
            <td>John Lilki</td>
            <td>September 14, 2013</td>
            <td>jhlilk22@yahoo.com</td>
            <td>No</td>
          </tr>
        </tbody>

        <tfoot class="full-width">
          <tr>
            <th></th>
            <th colspan="4">
              <div class="ui right floated small primary labeled icon button">
                <i class="user icon"></i> إضافة عضو
              </div>
              <div class="ui floated pagination menu">
                <a class="icon item">
                  <i class="right chevron icon"></i>
                </a>
                <a class="item">1</a>
                <a class="item">1</a>
                <a class="item">...</a>
                <a class="item">13</a>
                <a class="item">14</a>
                <a class="icon item">
                  <i class="left chevron icon"></i>
                </a>
              </div>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
