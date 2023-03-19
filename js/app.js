function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
   
function dl_st(fname){
  swal({
    title: "确认",
    text: "你确定要开始下载吗，这些文件可能含有外挂程序，所造成的全部后果需要您自己承担！",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("好的，即将开始为您获取下载链接，请稍等片刻。" , {
        icon: "success",
        title:fname.name
      });
      window.location.assign("cfg/" + fname.name)
    } else {
      //取消下载
    }
  });
}