var track_click = 0;
var page_number = 1;

function getDataList(contentsid) {

	var targeturl = '/json/testdata.json';

    $.ajax({
      'type': 'get',
      'dataType': 'json',
      'cache' : false,
      'url': targeturl,
      'success': function(jsondata) {
          var _rslt = jsondata.datalist;
					var total_rows = _rslt.length;
					var item_per_page = 6;
					var total_page = Math.ceil(total_rows/item_per_page);
          var checkNoDataFlg = "";

					if(track_click <= total_page-1){
						$("#moreBtn").remove();
						$("#loader1").remove();
						$("#loader2").remove();

						for(i = (track_click * item_per_page); i < (page_number * item_per_page); i++){
								var _title = _rslt[i].title;
								var _date = _rslt[i].date;
								var _link_url = _rslt[i].link_url;
								var _img_url = _rslt[i].img_url;
								checkNoDataFlg = _rslt[i].check_no_data;
								var datahtml = '<div class="content"><a href="'+_link_url+'"><img src="'+_img_url+'"><p class="summary">'+_title+'</p><div class="info"><p class="date">'+_date+'</p></div></a></div>';

								$('#'+contentsid).append(datahtml);
						}
						track_click++;
						page_number++;
					}

					$('#'+contentsid).append('<p class="btn_more" id="moreBtn"><a href="javascript:getDataList(\''+contentsid+'\')">Read More</a></p>');
					if (checkNoDataFlg == 'LASTDATA') {
						$("#moreBtn").remove();
					}
      },
      'error': function(XMLHttpRequest, textStatus, errorThrown) {
      }
    });
}
