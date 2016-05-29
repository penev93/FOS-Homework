var news=document.getElementsByClassName('news');
var buffNews=[];
for(var j=0;j<news.length;j++){
    buffNews.push(news[j].innerHTML);
}
var len=news.length;
for(var i=0;i<len;i++){
var newLen=news[i].innerHTML.length;
if(newLen>200){
var n=news[i].innerHTML;
var changedLen=n.substring(0,200);

news[i].innerHTML=changedLen+"...";
}
};
$(".extend").on("click",function(){

    var id=$(this).parent().attr('id');
    var element=buffNews[id];

 $(this).prev().text(element);

 });
