/*手机自适应设置*/
window.onload=window.onresize=window.onscroll=function(){	
	fontSize();
	pageShow();
};



$(function(){
	fontSize();
	pageShow();
})

function pageShow(){
	var oBox = document.getElementsByTagName('body')[0];
	oBox.style.visibility = 'visible';
}

function fontSize(){
	document.documentElement.style.fontSize = 100*(document.documentElement.clientWidth/750)+'px';
}

$(function() {
	
	$('#canvasBox').find('img').each(function() {
		var $this = $(this);
		$this.data('width', this.width);
		$this.data('height', this.height);
	});
	
	var mydate = new Date();
	var day = mydate.getDate();
	$('.time').find('.day').text(day);
	
	var year = mydate.getFullYear();
	var month = Appendzero(mydate.getMonth() + 1);
	var yearAndM = `${year}.${month}`;
	$('.time').find('.yearAndM').text(yearAndM);
	
	var weekEn = getWeekEn(mydate.getDay());
	var weekCh = getWeekCh(mydate.getDay());
	var week = `${weekEn}  ${weekCh}`;
//	$('.time').find('.English').text(weekEn);
//	$('.time').find('.Chinese').text(weekCh);
	$('.week').text(week);
	
//	$('#camera').click(function(e) {
//		$(".uploadfile").trigger("click");
//	});

	var textPlaceholder = '请输入你想说的话！';
	inpTextF($('#textarea'),textPlaceholder);
	
	var inputPlaceholder = '—A-Circle生活平台';
	inpTextF($('.input3'),inputPlaceholder);
	
//	$('.input1,.input2,.input3').on('input', function (e) {
//	    var $that =  $(this),
//	            limitLen = 28;                            //定义所需字节数
//	    $that.attr('maxlength',limitLen);
//	    setTimeout(function(){
//	        var value =  $that.val(),
//	            reg = /[\u4e00-\u9fa5]{1}/g,             //中文
//	            notReg = /\w{1}/g;                      //非中文
//	        var resultCn = value.match(reg);
//	        var resultEn = value.match(notReg);
//	        if(resultCn){
//	            limitLen = limitLen - (resultCn.length*2);
//	        }
//	        if(resultEn){
//	
//	            limitLen = limitLen - resultEn.length;
//	        }
//	        if(limitLen<=0){
//	            var finalLen = value.length+limitLen;
//	            value = value.substring(0,finalLen);
//	            $that.attr('maxlength',limitLen);
//	            $that[0].value = value;
//	        }
//	    },0);
//	
//	});
	
	
	

});


//input输入框光标点入，默认文字消失
function inpTextF(id,text){
	$(id).focus(function(){
		$(this).attr('placeholder','');
	});
	$(id).blur(function(){
		if($(this).attr('placeholder')==''){
			$(this).attr('placeholder',text);
		}
	});
}


function Appendzero (obj) {
    if (obj < 10) return "0" + obj; else return obj;
}

function getWeekCh (weeknum) {
    if (weeknum == 0)  week = "周日";
    if (weeknum == 1)  week = "周一";
	if (weeknum == 2)  week = "周二";
    if (weeknum == 3)  week = "周三";
    if (weeknum == 4)  week = "周四";
    if (weeknum == 5)  week = "周五";
    if (weeknum == 6)  week = "周六";
    return week;
}

function getWeekEn (weeknum) {
    if (weeknum == 0)  week = "Sun";
    if (weeknum == 1)  week = "Mon";
	if (weeknum == 2)  week = "Tue";
    if (weeknum == 3)  week = "Wed";
    if (weeknum == 4)  week = "Thu";
    if (weeknum == 5)  week = "Fri";
    if (weeknum == 6)  week = "Sat";
    return week;
}