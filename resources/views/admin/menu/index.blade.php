@extends('template')

@section('title', 'Menu Management')

@section('content')
<?php
$currentUrl = url()->current();

$get_tran_id = '';
if(isset($_GET['menu']) && $_GET['menu'] > 0){ 
    $get_tran_id = Helper::getMenu_ID($_GET['menu']);
}
?>

<link href="{{ URL('resources/views/admin') }}/menu/assets/style.css" rel="stylesheet">
<style>
    .menu-item-title{color: #464646;font-weight: 600;}
    #hwpwrap .menu-item-handle .item-title{margin-right: 0;margin-left: 0;}
    #hwpwrap .menu-item-settings .description-thin, #hwpwrap .menu-item-settings .description-wide {display: inline-table;}
    p#menu-item-url-wrap {padding: 4px;margin: 2px;}
    p.button-controls {padding-top: 10px;}
    .menu-168 {min-width: 168px!important;}
</style>
<div id="hwpwrap">
    <div class="custom-wp-admin wp-admin wp-core-ui js menu-max-depth-0 nav-menus-php auto-fold admin-bar">
        <div id="wpwrap">
            <div id="wpcontent">
                <div id="wpbody">
                    <div id="wpbody-content">

                        <div class="wrap">

                            <div class="manage-menus">
                                <form method="get" action="{{ $currentUrl }}">

                                    <label for="menu" class="selected-menu">Select the menu you want to edit:</label>
                                    <input type="hidden" name="lang" value="{{$lang}}">

                                        <select name="menu" class="menu-168">

                                            <option value="0">Select...</option>
                                            @foreach($allmenus as $pg)
                                                <option <?= $get_tran_id==$pg->translate_id?'selected':''?> value="{{$pg->id}}">{{$pg->name}}</option>
                                            @endforeach
                                        </select>


                                    <span class="submit-btn">
                                        <input type="submit" class="button-secondary" value="Choose">
                                    </span>
                                    <span class="add-new-menu-action"> or <a href="{{ $currentUrl }}?lang={{$lang}}&action=edit&menu=0">Create new menu</a></span>

                                </form>
                            </div>

                            <div id="nav-menus-frame">

                                @if(request()->has('menu')  && !empty(request()->input("menu")))
                                <div id="menu-settings-column" class="metabox-holder">

                                    <div class="clear"></div>

                                    <form id="nav-menu-meta" action="" class="nav-menu-meta" method="post" enctype="multipart/form-data">
                                        <div id="side-sortables" class="accordion-container">
                                            <ul class="outer-border">
                                                <li class="control-section accordion-section  open add-page" id="add-page">
                                                    <h3 class="accordion-section-title hndle" tabindex="0"> Custom Link <span class="screen-reader-text">Press return or enter to expand</span></h3>
                                                    <div class="accordion-section-content ">
                                                        <div class="inside">
                                                            <div class="customlinkdiv" id="customlinkdiv">
                                                                <p id="menu-item-url-wrap">
                                                                    <label class="howto" for="custom-menu-item-url"> <span>URL</span>&nbsp;&nbsp;&nbsp;
                                                                        <input id="custom-menu-item-url" name="url" type="text" class="menu-item-textbox " placeholder="url">
                                                                    </label>
                                                                </p>

                                                                <p id="menu-item-name-wrap">
                                                                    <label class="howto" for="custom-menu-item-name"> <span>Label</span>&nbsp;
                                                                        <input id="custom-menu-item-name" name="label" type="text" class="regular-text menu-item-textbox input-with-default-title" title="Label menu">
                                                                    </label>
                                                                </p>

                                                                <p class="button-controls">

                                                                    <a href="#" onclick="addcustommenu()"  class="button-secondary submit-add-to-menu right"  >Add menu item</a>
                                                                    <span class="spinner" id="spincustomu"></span>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </form>

                                </div>
                                @endif

                                <div id="menu-management-liquid">
                                    <div id="menu-management">
                                        <form id="update-nav-menu" action="" method="post" enctype="multipart/form-data">

                                            <input type="hidden" id="lang-code" name="lang_code" value="{{$lang}}">

                                            <div class="menu-edit ">

                                                <div id="nav-menu-header">
                                                    <div class="major-publishing-actions">
                                                        <label class="menu-name-label howto open-label" for="menu-name"> <span>Name</span>
                                                            <input name="name" id="menu-name" type="text" class="menu-name regular-text menu-item-textbox" title="Enter menu name" value="@if(isset($indmenu)){{$indmenu->name}}@endif">
                                                            <input type="hidden" id="idmenu" value="@if(isset($indmenu)){{$indmenu->id}}@endif" />
                                                        </label>

                                                        @if(request()->has('action'))
                                                        <div class="publishing-action">
                                                            <a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
                                                        </div>
                                                        @elseif(request()->has("menu"))
                                                        <div class="publishing-action">
                                                            <a onclick="getmenus()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Save menu</a>
                                                            <span class="spinner" id="spincustomu2"></span>
                                                        </div>

                                                        @else
                                                        <div class="publishing-action">
                                                            <a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
                                                        </div>
                                                        @endif

                                                        


                                                        <label class="menu-name-label" for="translate-id"> <span> &nbsp; Translated Of</span>
                                                            <select id="translate-id" name="translate_id" class="menu-168">
                                                                <option value="0">Select...</option>

                                                                @foreach($allMenusByLang as $pg)
                                                                     <option <?= $get_tran_id==$pg->translate_id?'selected':''?> value="{{$pg->translate_id}}">{{$pg->name}}</option>
                                                                @endforeach

                                                            </select>
                                                        </label>

                                                    </div>


                                                </div>
                                                <div id="post-body">
                                                    <div id="post-body-content">

                                                        @if(request()->has("menu"))
                                                        <h3>Menu Structure</h3>
                                                        <div class="drag-instructions post-body-plain" style="">
                                                            <p>
                                                                Place each item in the order you prefer. Click on the arrow to the right of the item to display more configuration options.
                                                            </p>
                                                        </div>

                                                        @else
                                                        <h3>Menu Creation</h3>
                                                        <div class="drag-instructions post-body-plain" style="">
                                                            <p>
                                                                Please enter the name and select "Create menu" button
                                                            </p>
                                                        </div>
                                                        @endif

                                                        <ul class="menu ui-sortable" id="menu-to-edit">
                                                            @if(isset($menus))
                                                            @foreach($menus as $m)
                                                            <li id="menu-item-{{$m->id}}" class="menu-item menu-item-depth-{{$m->depth}} menu-item-page menu-item-edit-inactive pending" style="display: list-item;">
                                                                <dl class="menu-item-bar">
                                                                    <dt class="menu-item-handle">
                                                                        <span class="item-title"> <span class="menu-item-title"> <span id="menutitletemp_{{$m->id}}">{{$m->label}}</span> <span style="color: transparent;">|{{$m->id}}|</span> </span> <span class="is-submenu" style="@if($m->depth==0)display: none;@endif">Subelement</span> </span>
                                                                        <span class="item-controls"> <span class="item-type">Link</span> <span class="item-order hide-if-js"> <a href="{{ $currentUrl }}?action=move-up-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-up"><abbr title="Move Up">↑</abbr></a> | <a href="{{ $currentUrl }}?action=move-down-menu-item&menu-item={{$m->id}}&_wpnonce=8b3eb7ac44" class="item-move-down"><abbr title="Move Down">↓</abbr></a> </span> <a class="item-edit" id="edit-{{$m->id}}" title=" " href="{{ $currentUrl }}?edit-menu-item={{$m->id}}#menu-item-settings-{{$m->id}}"> </a> </span>
                                                                    </dt>
                                                                </dl>

                                                                <div class="menu-item-settings" id="menu-item-settings-{{$m->id}}">
                                                                    <input type="hidden" class="edit-menu-item-id" name="menuid_{{$m->id}}" value="{{$m->id}}" />
                                                                    <p class="description description-thin">
                                                                        <label for="edit-menu-item-title-{{$m->id}}"> Label
                                                                            <br>
                                                                            <input type="text" id="idlabelmenu_{{$m->id}}" class="widefat edit-menu-item-title" name="idlabelmenu_{{$m->id}}" value="{{$m->label}}">
                                                                        </label>
                                                                    </p>

                                                                    <p class="field-css-classes description description-thin">
                                                                        <label for="edit-menu-item-classes-{{$m->id}}"> Class CSS (optional)
                                                                            <br>
                                                                            <input type="text" id="clases_menu_{{$m->id}}" class="widefat code edit-menu-item-classes" name="clases_menu_{{$m->id}}" value="{{$m->class}}">
                                                                        </label>
                                                                    </p>

                                                                    <p class="field-css-url description description-wide">
                                                                        <label for="edit-menu-item-url-{{$m->id}}"> Url
                                                                            <br>
                                                                            <input type="text" id="url_menu_{{$m->id}}" class="widefat code edit-menu-item-url" id="url_menu_{{$m->id}}" value="{{$m->link}}">
                                                                        </label>
                                                                    </p>

                                                                    <p class="field-move hide-if-no-js description description-wide">
                                                                        <label> <span>Move</span> <a href="{{ $currentUrl }}" class="menus-move-up" style="display: none;">Move up</a> <a href="{{ $currentUrl }}" class="menus-move-down" title="Mover uno abajo" style="display: inline;">Move Down</a> <a href="{{ $currentUrl }}" class="menus-move-left" style="display: none;"></a> <a href="{{ $currentUrl }}" class="menus-move-right" style="display: none;"></a> <a href="{{ $currentUrl }}" class="menus-move-top" style="display: none;">Top</a> </label>
                                                                    </p>

                                                                    <div class="menu-item-actions description-wide submitbox">

                                                                        <a class="item-delete submitdelete deletion" id="delete-{{$m->id}}" href="{{ $currentUrl }}?action=delete-menu-item&menu-item={{$m->id}}&_wpnonce=2844002501">Delete</a>
                                                                        <span class="meta-sep hide-if-no-js"> | </span>
                                                                        <a class="item-cancel submitcancel hide-if-no-js button-secondary" id="cancel-{{$m->id}}" href="{{ $currentUrl }}?edit-menu-item={{$m->id}}&cancel=1424297719#menu-item-settings-{{$m->id}}">Cancel</a>
                                                                        <span class="meta-sep hide-if-no-js"> | </span>
                                                                        <a onclick="getmenus()" class="button button-primary updatemenu" id="update-{{$m->id}}" href="javascript:void(0)">Update item</a>

                                                                    </div>

                                                                </div>
                                                                <ul class="menu-item-transport"></ul>
                                                            </li>
                                                            @endforeach
                                                            @endif
                                                        </ul>
                                                        <div class="menu-settings">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="nav-menu-footer">
                                                    <div class="major-publishing-actions">

                                                        @if(request()->has('action'))
                                                        <div class="publishing-action">
                                                            <a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
                                                        </div>
                                                        @elseif(request()->has("menu"))
                                                        <span class="delete-action"> <a class="submitdelete deletion menu-delete" onclick="deletemenu()" href="javascript:void(9)">Delete menu</a> </span>
                                                        <div class="publishing-action">

                                                            <a onclick="getmenus()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Save menu</a>
                                                            <span class="spinner" id="spincustomu2"></span>
                                                        </div>

                                                        @else
                                                        <div class="publishing-action">
                                                            <a onclick="createnewmenu()" name="save_menu" id="save_menu_header" class="button button-primary menu-save">Create menu</a>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ URL('resources/views/admin') }}/menu/assets/scripts.js"></script>
<script type="text/javascript" src="{{ URL('resources/views/admin') }}/menu/assets/scripts2.js"></script>


<script>
    var menus = {
        "oneThemeLocationNoMenus" : "",
        "moveUp" : "Move up",
        "moveDown" : "Mover down",
        "moveToTop" : "Move top",
        "moveUnder" : "Move under of %s",
        "moveOutFrom" : "Out from under  %s",
        "under" : "Under %s",
        "outFrom" : "Out from %s",
        "menuFocus" : "%1$s. Element menu %2$d of %3$d.",
        "subMenuFocus" : "%1$s. Menu of subelement %2$d of %3$s."
    };
    var arraydata = [];     
    var addcustommenur= '{{ route("addcustommenu") }}';
    var updatemenuitemr= '{{ route("updateitemr") }}';
    var generatemenucontrolr= '{{ route("menucontrol") }}';
    var deleteitemmenur= '{{ route("hdeleteitemmenu") }}';
    var deletemenugr= '{{ route("hdeletemenug") }}';
    var store = '{{ route("storemenu") }}';
    var csrftoken="{{ csrf_token() }}";
    var menuwr = "{{ url()->current() }}";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrftoken
        }
    });

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var arraydata = [];

    function getmenus() {
      arraydata = [];
      $('#spinsavemenu').show();

      var cont = 0;
      $('#menu-to-edit li').each(function(index) {
        var dept = 0;
        for (var i = 0; i < $('#menu-to-edit li').length; i++) {
          var n = $(this)
            .attr('class')
            .indexOf('menu-item-depth-' + i);
          if (n != -1) {
            dept = i;
          }
        }
        var textoiner = $(this)
          .find('.item-edit')
          .text();
        var id = this.id.split('-');
        var textoexplotado = textoiner.split('|');
        var padre = 0;
        if (
          !!textoexplotado[textoexplotado.length - 2] &&
          textoexplotado[textoexplotado.length - 2] != id[2]
        ) {
          padre = textoexplotado[textoexplotado.length - 2];
        }
        arraydata.push({
          depth: dept,
          id: id[2],
          parent: padre,
          sort: cont
        });
        cont++;
      });
      updateitem();
      actualizarmenu();
    }


    function createnewmenu() {
      if (!!$('#menu-name').val()) {
        var tr_id = $('#translate-id option:selected').val();
        if (tr_id == 0){
            tr_id = '<?php echo uniqid() ?>';
        } else{
            tr_id = $('#translate-id option:selected').val();
        }
        $.ajax({
          dataType: 'json',
          data: {
            name: $('#menu-name').val(),
            lang_code: $('#lang-code').val(),
            translate_id: tr_id,
          },

          url: store,
          type: 'POST',
          success: function(response) {
            window.location = menuwr + '?menu=' + response.resp;
          }
        });
      } else {
        alert('Enter menu name!');
        $('#menu-name').focus();
        return false;
      }
    }

    function addcustommenu() {
      $('#spincustomu').show();

      $.ajax({
        data: {
          labelmenu: $('#custom-menu-item-name').val(),
          linkmenu: $('#custom-menu-item-url').val(),
          idmenu: $('#idmenu').val()
        },
        dataType: 'JSON',
        url: addcustommenur,
        type: 'POST',
        success: function(response) {
            console.log('success');
            $('#spincustomu').hide();
            location.reload();
        },
        complete: function() {
          $('#spincustomu').hide();
          location.reload();
        }
      });
    }


    function getmenus() {
      arraydata = [];
      $('#spinsavemenu').show();

      var cont = 0;
      $('#menu-to-edit li').each(function(index) {
        var dept = 0;
        for (var i = 0; i < $('#menu-to-edit li').length; i++) {
          var n = $(this)
            .attr('class')
            .indexOf('menu-item-depth-' + i);
          if (n != -1) {
            dept = i;
          }
        }
        var textoiner = $(this)
          .find('.item-edit')
          .text();
        var id = this.id.split('-');
        var textoexplotado = textoiner.split('|');
        var padre = 0;
        if (
          !!textoexplotado[textoexplotado.length - 2] &&
          textoexplotado[textoexplotado.length - 2] != id[2]
        ) {
          padre = textoexplotado[textoexplotado.length - 2];
        }
        arraydata.push({
          depth: dept,
          id: id[2],
          parent: padre,
          sort: cont
        });
        cont++;
      });
      updateitem();
      actualizarmenu();
    }

    function updateitem(id = 0) {
      if (id) {
        var label = $('#idlabelmenu_' + id).val();
        var clases = $('#clases_menu_' + id).val();
        var url = $('#url_menu_' + id).val();
        var role_id = 0;
        if ($('#role_menu_' + id).length) {
          role_id = $('#role_menu_' + id).val();
        }

        var data = {
          label: label,
          clases: clases,
          url: url,
          role_id: role_id,
          id: id
        };
      } else {
        var arr_data = [];
        $('.menu-item-settings').each(function(k, v) {
          var id = $(this)
            .find('.edit-menu-item-id')
            .val();
          var label = $(this)
            .find('.edit-menu-item-title')
            .val();
          var clases = $(this)
            .find('.edit-menu-item-classes')
            .val();
          var url = $(this)
            .find('.edit-menu-item-url')
            .val();
          var role = $(this)
            .find('.edit-menu-item-role')
            .val();
          arr_data.push({
            id: id,
            label: label,
            class: clases,
            link: url,
            role_id: role
          });
        });

        var data = { arraydata: arr_data };
      }
      $.ajax({
        data: data,
        url: updatemenuitemr,
        type: 'POST',
        beforeSend: function(xhr) {
          if (id) {
            $('#spincustomu2').show();
          }
        },
        success: function(response) {},
        complete: function() {
          if (id) {
            $('#spincustomu2').hide();
          }
        }
      });
    }

    function actualizarmenu() {
        var tr_id = $('#translate-id option:selected').val();
        if (tr_id == 0){
            tr_id = '<?php echo uniqid() ?>';
        } else{
            tr_id = $('#translate-id option:selected').val();
        }

      $.ajax({
        dataType: 'json',
        data: {
          arraydata: arraydata,
          menuname: $('#menu-name').val(),
          idmenu: $('#idmenu').val(),
          translate_id: tr_id,
        },

        url: generatemenucontrolr,
        type: 'POST',
        beforeSend: function(xhr) {
          $('#spincustomu2').show();
        },
        success: function(response) {
          //console.log('aqu llega');
        },
        complete: function() {
          $('#spincustomu2').hide();
        }
      });
    }

    function deleteitem(id) {
      $.ajax({
        dataType: 'json',
        data: {
          id: id
        },

        url: deleteitemmenur,
        type: 'POST',
        success: function(response) {}
      });
    }

    function deletemenu() {
      var r = confirm('Do you want to delete this menu ?');
      if (r == true) {
        $.ajax({
          dataType: 'json',

          data: {
            id: $('#idmenu').val()
          },

          url: deletemenugr,
          type: 'POST',
          beforeSend: function(xhr) {
            $('#spincustomu2').show();
          },
          success: function(response) {
            if (!response.error) {
              alert(response.resp);
              window.location = menuwr+'?lang=<?=$lang?>';
            } else {
              alert(response.resp);
            }
          },
          complete: function() {
            $('#spincustomu2').hide();
          }
        });
      } else {
        return false;
      }
    }

    function insertParam(key, value) {
      key = encodeURI(key);
      value = encodeURI(value);

      var kvp = document.location.search.substr(1).split('&');

      var i = kvp.length;
      var x;
      while (i--) {
        x = kvp[i].split('=');

        if (x[0] == key) {
          x[1] = value;
          kvp[i] = x.join('=');
          break;
        }
      }

      if (i < 0) {
        kvp[kvp.length] = [key, value].join('=');
      }

      //this will reload the page, it's likely better to store this until finished
      document.location.search = kvp.join('&');
    }

    wpNavMenu.registerChange = function() {
      getmenus();
    };

</script>

@endsection