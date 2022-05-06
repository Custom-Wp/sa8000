function cwp_acc_search() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('cwpInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("cwpUl");
  li = ul.getElementsByTagName('h3');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].parentElement.style.display = "";
    } else {
      li[i].parentElement.style.display = "none";
    }
  }
}

jQuery(document).ready(function($){
  $('#cwpregion').on('change', function(){
    $('res:not(.'+ this.value +')').hide();
    $('res.'+ this.value + '').show();
    console.log(this.value)
    if(this.value === '0'){
      $('res').show();
    }
  })

  $('.cwpsf').focus(function(){
    $(this).prev().addClass('active')
  }).blur(function() {
      if(!$(this).val()){
          $(this).prev().removeClass('active');
      }
  });

  $('.cwpsf').focus(function(){
      $(this).prev().addClass('active')
  }).blur(function() {
      var currentItem = $(this);
      setTimeout(function () {
          if(!$(currentItem).val()){
              $(currentItem).prev().removeClass('active');
          }
      }, 200)
      
  });


  // FacetWp Ajax SA8000 CBs

  var facetAjax = ajaxUrl.replace('wp-admin/admin-ajax.php','wp-json/facetwp/v1/fetch');
  $('.cwpsf').keydown(function(){
    $('.cwp-reset').addClass('actv');
  })

  $('#cwpregion').change(function(){
      $('.cwp-reset').addClass('actv');
  })

  $('.cwp-reset').click(function(){
    $('#cwpInput').val('');
    $('#cwpregion').val('0');
    $(this).removeClass('actv');
    $('.cwpsfl').removeClass('active');
    $('res').css('display','');
    // $('#cwp-facet-loading').addClass('active')
    // $.ajax({
    //     url : ajaxUrl,
    //     type : 'post',
    //     data : {
    //         action : 'cwp_get_all_cbs'
    //     },
    //     success : function( allres ) {
    //       allres = allres.replace(0,'')
    //         $('#cwpUl').html(allres);
    //         $('#cwp-facet-loading').removeClass('active')
    //     }
    // })
  })

  // $('.cwp-sa-search').click(function(){
  //   $('#cwp-facet-loading').addClass('active')
  //   var reg = $('#cwpregion').val();
  //   var cwpsearch = $('#cwpInput').val();
  //   var request_data = {
  //     'data': {
  //       'facets': {
  //           'sa8000_regions': (reg !== '0') ? [reg] : [],
  //           'cb_search': (cwpsearch) ? cwpsearch : ''
  //       },
  //       'query_args': {
  //         'post_type': 'resource',
  //         'posts_per_page': 40,
  //         'cat': 300
  //       }
  //     }
  //   };

  //   var response = fetch(facetAjax, {
  //     'method': 'POST',
  //     'headers': {
  //       'Content-Type': 'application/json',
  //     },
  //     'body': JSON.stringify(request_data)
  //   })
  //   .then(response => response.json())
  //   .then(result => 
      
  //     $.ajax({
  //         url : ajaxUrl,
  //         type : 'post',
  //         data : {
  //             action : 'cwp_facet_cb',
  //             post_id : result.results
  //         },
  //         success : function( res ) {
  //           res = res.replace(0,'')
  //             $('#cwpUl').html(res);
  //             $('#cwp-facet-loading').removeClass('active')
  //         }
  //     })
  //   );
    
  // })

})

