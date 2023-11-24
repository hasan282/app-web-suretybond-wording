$(function () {
  $("#backmode").change(function () {
    const BACKBLNK = $(this).prop("checked");
    setCookie("BGBLNK", BACKBLNK ? 1 : 0, 1);
    window.location.reload();
  });

  $("#newprofile").click(function () {
    $(".pagesettings").attr("disabled", false);
    $("#boxselectprofile").addClass("hide-content");
    $("#boxbuttonsave").removeClass("hide-content");
    $("#boxprofilename").removeClass("hide-content");
    $("#boxbuttonapply").addClass("hide-content");
  });

  $("#editprofile").click(function () {
    $("#formsettings").attr("action", BaseURL + "guarantee/profile/edit");
    $(".pagesettings").attr("disabled", false);
    $("#boxselectprofile").addClass("hide-content");
    $("#boxbuttonedit").removeClass("hide-content");
    const PROFILENAME = $(
      'option[value="' + $("#enkriprofile").val() + '"]'
    ).html();
    $("#profile_name").val(PROFILENAME);
    $("#boxprofilename").removeClass("hide-content");
    $("#boxbuttonapply").addClass("hide-content");
  });

  $("#profile_name").on("keyup", function () {
    const NAMEVAL = $(this).val();
    $("#btnsave").attr("disabled", NAMEVAL == "");
    $("#btnsavedit").attr("disabled", NAMEVAL == "");
  });

  $("#profile").on("change", function () {
    $("#boxbuttonapply").removeClass("hide-content");
  });

  $("#btnapply").click(function () {
    $("#hid_profile").val($("#profile").val());
    $("#hid_submit").trigger("click");
  });
});
