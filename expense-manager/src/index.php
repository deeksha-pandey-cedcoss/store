<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Expense Manager</title>
    <link rel="stylesheet" href="./CSS/style.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="wrapper__section">
            <button id="income" class="wrapper__btn"><b>Income</b></button>
            <button id="expense" class="wrapper__btn"><b>Expense</b></button>
        </div>
        <hr>
        <div class="wrapper__add">
            <div id="addincome">
                <label for="income" class="wrapper__label">Income</label><br>
                <input type="number" id="enterincome">
                <button id="addIncome" class="wrapper__addbtn">Add</button>
            </div>
            <div id="addexpense">
                <label for="expense" class="wrapper__label">Expense</label><br>
                <input type="number" id="enterexpense">
                <select id="selectExpense">
                    <option value="Grocery">Grocery</option>
                    <option value="Veggies">Veggies</option>
                    <option value="Travelling">Travelling</option>
                    <option value="Miscellaneous">Miscellaneous</option>
                </select>
                <button id="addExpense" class="wrapper__addbtn">Add</button>
            </div>
        </div>
        <hr>
        <div class="wrapper__main">
            <br>
            <label for="income">Income</label>
            <input type="text" readonly="readonly" id="showincome" class="wrapper__show">
            <label for="expense">Expense</label>
            <input type="text" readonly="readonly" id="showexpense" class="wrapper__show">
            <br><br>
            <label for="remaining">Remaining</label>
            <br>
            <input type="text" readonly="readonly" id="showremaining" class="wrapper__show">
        </div>
        <p id="error"></p>
        <!-- table of details -->
        <hr>
        <div class="wrapper__display">
            <table class="wrapper__table">
                <thead>
                    <tr>
                    <th>Category</th>
                    <th>Expense</th>
                    <th>Edit</th>
                    <th>Remove</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
        <hr>
        <!-- table of category -->
        <hr>
    </div>
    <div>
            <table id="category">
                <thead>
                    <tr>
                        <th id="grocery">Grocery</th>
                        <th id="veggies">Veggies</th>
                        <th id="travelling">Travelling</th>
                        <th id="miscellaneous">Miscellaneous</th>
                    </tr>
                </thead>
                <tbody id="categorytbody"></tbody>
            </table>
        </div>
</body>
<script src="./JS/main.js"></script>
