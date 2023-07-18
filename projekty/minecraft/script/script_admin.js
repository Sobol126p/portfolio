
var imgInfo_modal = document.getElementById("imgInfo_sett");
var Click_ImgInfo = document.getElementById("Click_ImgInfo");
Click_ImgInfo.onclick = function () {
    imgInfo_modal.style.display = "block";
};
window.onclick = function (event) {
  if (event.target == imgInfo_modal) {
    imgInfo_modal.style.display = "none";
  };
};

document.getElementById('close_ImgInfo').onclick = function ()
{
  imgInfo_modal.style.display = "none";
};



var trybgry_modal = document.getElementById("trybgry_sett");
var Click_trybgry = document.getElementById("Click_trybgry");
Click_trybgry.onclick = function () {
  trybgry_modal.style.display = "block";
};
window.onclick = function (event) {
  if (event.target == trybgry_modal) {
    trybgry_modal.style.display = "none";
  };
};

document.getElementById('close_trybgry').onclick = function ()
{
  trybgry_modal.style.display = "none";
};




var admin_modal = document.getElementById("admin_sett");
var Click_admin = document.getElementById("Click_admin");
Click_admin.onclick = function () {
  admin_modal.style.display = "block";
};
window.onclick = function (event) {
  if (event.target == admin_modal) {
    admin_modal.style.display = "none";
  };
};

document.getElementById('close_admin').onclick = function ()
{
  admin_modal.style.display = "none";
};