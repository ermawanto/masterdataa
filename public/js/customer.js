$(document).ready(function(){
  var page = 1;

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
  })

  // show customers
  $.ajax({
    dataType:'json',
    url: window.location.origin + '/api/customers',
    type: 'get',
    data: {page:page},
    success: function(data){
      manageRow(data);
    }
  });

  function manageRow(data){
    var	rows = '';
  	$.each( data, function( key, value ) {
  	  	rows = rows + '<tr>';
        rows = rows + '<td>'+(key+1)+'</td>';
  	  	rows = rows + '<td>'+value.kode_customer+'</td>';
  	  	rows = rows + '<td>'+value.nama_customer+'</td>';
  	  	rows = rows + '<td data-id="'+value.id+'">';
                  rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary btn-sm edit-item">Edit</button> ';
                  rows = rows + '<button class="btn btn-danger btn-sm remove-item">Delete</button>';
                  rows = rows + '</td>';
  	  	rows = rows + '</tr>';
  	});


  	$("tbody.customer").html(rows);
  }

  $(document).on('click','#submit',function(){
    var kode_customer = $('#kode_customer').val();

    var data = {
      'kode_customer': kode_customer,
    };

    $.ajax({
      dataType:'json',
      url: window.location.hostname+'api/customers',
      type: 'post',
      data: {page: page},
      success: function(data){
        console.log(data);
      }
    });
  });
});
