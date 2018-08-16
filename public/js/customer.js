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
    url: 'api/customers',
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
                  rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
                  rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
                  rows = rows + '</td>';
  	  	rows = rows + '</tr>';
  	});


  	$("tbody.customer").html(rows);
  }
});
