$(document).ready(function () {
    $("#addexpense").hide();
    $("#addincome").hide();
  });
  $("#income").click(function () {
    $("#addexpense").hide();
    $("#addincome").show();
  });
  $("#expense").click(function () {
    $("#addincome").hide();
    $("#addexpense").show();
  });
let flag=0;
let income = 0;
let remaining = 0;
let expense = 0;
// add Income
$("#addIncome").click(function () {
  let income = $("#enterincome").val();
  if (income == "" || income <= 0) {
    $("#error").html("Enter valid income").css("color", "red");
  } else {
    $("#error").html("");
    $.ajax({
      url: "addIncome.php",
      type: "POST",
      data: "income=" + income,
      datatype: "number",
    }).done(function (result) {
      let res = jQuery.parseJSON(result);
      $("#showincome").val(res["income"]);
      $("#showremaining").val(res["remaining"]);
      $("#showexpense").val(res["totalExpense"]);
      total();
      display();
    });
  }
  });
  // add expense
  $("#addExpense").click(function () {
    let expense = $("#enterexpense").val();
  let category = $("#selectExpense").val();
  if (expense == "" || expense <= 0) {
    $("#error").html("Enter correct expense details").css("color", "red");
  } else {
    $("#error").html("");
    $.ajax({
      url: "addExpense.php",
      type: "POST",
      data: { 'expense': expense, 'category': category, 'flag': flag },
      datatype: "JSON",
    }).done(function (result) {
      let res = jQuery.parseJSON(result);
      $("#showincome").val(res["income"]);
      $("#showremaining").val(res["remaining"]);
      $("#showexpense").val(res["totalExpense"]);
      $("#addExpense").html("Add");
      flag = 0;
      total();
      display();
    });
  }
     
  });
  // function to display 
  function display() {
    $.ajax({
      url: "display.php",
      type: "POST",
    }).done(function (result) {
      $("#tbody").html(result);
    });
  }
  // function to delete expence
  function deleteExpense(id) {
    $.ajax({
      url: "delete.php",
      type: "POST",
      data: "id=" + id,
    }).done(function () {
      display();
    });
  }
  // function to edit expense
  function editExpense(id) {
    flag = 1;
    $.ajax({
      url: "edit.php",
      type: "POST",
      data: "id=" + id,
    }).done(function (result) {
      let res = jQuery.parseJSON(result);
      $("#enterexpense").val(res["value"]);
      $("#selectexpense").val(res["key"]);
      $("#addExpense").html("Update");
      total();
      display();
    });
  }
  // function to show category totalamount 
  function total() {
    $.ajax({
      url: "category.php",
    }).done(function (result) {
      $("#categorytbody").html(result);
    });
  }
