@extends('backend.layout')
@section('content')

<div class="ui buttons">
  <button class="ui button">Cancel</button>
  <div class="or"></div>
  <button class="ui positive button">Save</button>
</div>

{{-- ------------------------------------------------------ --}}
<div class="ui animated button" tabindex="0">
  <div class="visible content">Next</div>
  <div class="hidden content">
    <i class="right arrow icon"></i>
  </div>
</div>

{{-- ------------------------------------------------------ --}}
<div class="ui labeled button" tabindex="0">
  <div class="ui red button">
    <i class="heart icon"></i> Like
  </div>
  <a class="ui basic red left pointing label">
    1,048
  </a>
</div>

{{-- ------------------------------------------------------ --}}
<h4 class="ui horizontal divider">
  ssa
</h4>
{{-- ------------------------------------------------------ --}}
<div class="ui horizontal list">
  <div class="item">
    <img class="ui mini circular image" src="http://semantic-ui.com/images/avatar2/small/molly.png">
    <div class="content">
      <div class="ui sub header">Molly</div>
      Coordinator
    </div>
  </div>
  <div class="item">
    <img class="ui mini circular image" src="http://semantic-ui.com/images/avatar2/small/molly.png">
    <div class="content">
      <div class="ui sub header">Elyse</div>
      Developer
    </div>
  </div>
  <div class="item">
    <img class="ui mini circular image" src="http://semantic-ui.com/images/avatar2/small/molly.png">
    <div class="content">
      <div class="ui sub header">Elyse</div>
      Developer
    </div>
  </div>
</div>
{{-- ------------------------------------------------------ --}}
<div class="ui left icon input">
  <input type="text" placeholder="Search users...">
  <i class="users icon"></i>
</div>
{{-- ------------------------------------------------------ --}}
<div class="ui labeled input">
  <div class="ui label">
    http://
  </div>
  <input type="text" placeholder="mysite.com">
</div>
{{-- ------------------------------------------------------ --}}
<div class="ui right labeled input">
  <input type="text" placeholder="Enter weight..">
  <div class="ui basic label">
    kg
  </div>
</div>
{{-- ------------------------------------------------------ --}}
<div class="ui transparent left icon input">
  <input type="text" placeholder="Search...">
  <i class="search icon"></i>
</div>
{{-- ------------------------------------------------------ --}}
<div class="ui label">
  <i class="mail icon"></i> 23
</div>
{{-- ------------------------------------------------------ --}}
{{-- <div class="ui active dimmer">
  <div class="ui loader"></div>
</div> --}}
{{-- ------------------------------------------------------ --}}

<div class="ui breadcrumb">
  <a class="section">Home</a>
  <i class="right chevron icon divider"></i>
  <a class="section">Registration</a>
  <i class="right arrow icon divider"></i>
  <div class="active section">Personal Information</div>
</div>

{{-- ------------------------------------------------------ --}}

<table class="ui compact celled definition table">
  <thead class="full-width">
    <tr>
      <th></th>
      <th>Name</th>
      <th>Registration Date</th>
      <th>E-mail address</th>
      <th>Premium Plan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>John Lilki</td>
      <td>September 14, 2013</td>
      <td>jhlilk22@yahoo.com</td>
      <td>No</td>
    </tr>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>Jamie Harington</td>
      <td>January 11, 2014</td>
      <td>jamieharingonton@yahoo.com</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>كةتشي</td>
      <td>May 11, 2014</td>
      <td>jilsewris22@yahoo.com</td>
      <td>Yes</td>
    </tr>
  </tbody>
  <tfoot class="full-width">
    <tr>
      <th></th>
      <th colspan="4">
        <div class="ui right floated small primary labeled icon button">
          <i class="user icon"></i> Add User
        </div>
        <div class="ui small  button">
          Approve
        </div>
        <div class="ui small  disabled button">
          Approve All
        </div>
      </th>
    </tr>
  </tfoot>
</table>
{{-- ------------------------------------------------------ --}}

<div class="ui horizontal secondary segments">

  <div class="ui red segment">
    <div class="ui labeled button" tabindex="0">
      <div class="ui red button">
        إعلان
      </div>
      <div class="ui basic red left pointing label">
        1,048
      </div>
    </div>
  </div>

  <div class="ui blue segment">
    <div class="ui labeled button" tabindex="0">
      <div class="ui blue button">
        تعليق
      </div>
      <a class="ui basic blue left pointing label">
        1,048
      </a>
    </div>
  </div>

  <div class="ui violet segment">
    <div class="ui labeled button" tabindex="0">
      <div class="ui violet button">
        تدوينة
      </div>
      <a class="ui basic violet left pointing label">
        1,048
      </a>
    </div>
  </div>

  <div class="ui purple segment">
    <div class="ui labeled button" tabindex="0">
      <div class="ui purple button">
        قسم
      </div>
      <a class="ui basic purple left pointing label">
        1,048
      </a>
    </div>
  </div>

  <div class="ui teal segment">
    <div class="ui labeled button" tabindex="0">
      <div class="ui teal button">
        عضو
      </div>
      <a class="ui basic teal left pointing label">
        1,048
      </a>
    </div>
  </div>

  <div class="ui pink segment">
    <div class="ui labeled button" tabindex="0">
      <div class="ui pink button">
        صفحة
      </div>
      <a class="ui basic pink left pointing label">
        1,048
      </a>
    </div>
  </div>

</div>

{{-- ------------------------------------------------------ --}}

{{-- <div class="ui embed" data-source="youtube" data-id="O6Xo21L0ybE" data-icon="video" data-placeholder="/images/bear-waving.jpg"></div> --}}

{{-- ------------------------------------------------------ --}}


{{-- ------------------------------------------------------ --}}


@endsection

@push('scripts')
<script type="text/javascript">
  // $('.sidebar')
  //   .sidebar('setting', 'transition', 'push')
  //   // .sidebar('toggle')
  // ;

</script>
@endpush
