<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../CSS/homepage.css" />
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/52d2b40c3f.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
  <!-- this is the main container of the application -->
  <div class="container">
    <div class="Habitsdiv">
      <div class="notification-title">
        <h4>Notification </h4>
        <button class="cancelicon" id="close-notificationList">X</button>
      </div>
      <hr>
      <div class="Tasklist">
        <p>Drink water</p>
        <button class="removetask">Remove</button>
      </div>

    </div>
    <div class="inner-container">
      <header class="header">
        <div class="left-section">
          <h1>What's Up<span class="username"><?php echo $_SESSION['name']; ?></span></h1>
        </div>
        <!-- this is our right side contents -->
        <div class="right-section">
          <div class="search-icon-div">
            <i class="fa-solid fa-magnifying-glass" style="color: #0c2001"></i>
          </div>
          <input placeholder="search" type="search" class="input-box" />
          <form method="post" action="/addedTaskDetails">
                <button name="addedTask">AddedTask</button>
            </form>
          <ul class="icons">
            <li class="right-icon">
              <img class="notification" src="../Icons/clarity_notification-line.png"  onclick="openNotofy()" />
            </li>
            <li class="right-icon">
              <img src="../Icons/dark_mode.png" />
            </li>
            <li class="right-icon">
              <img src="../Icons/logout_FILL0_wght400_GRAD0_opsz48 1.png" />
            </li>
          </ul>
        </div>
      </header>
        <div>
<!--            --><?php //if($) ?>
<!--            --><?php //foreach ($tasks as $key => $value) :?>
<!--                <p>--><?php //echo $value['name'] ?><!--</p>-->
<!--            --><?php //endforeach; ?>
        </div>
      <!-- this below section is for add button -->
      <div class="add-todo-btn-section">
        <div class="add-todo-inner-section">
          <h2 class="add-btn">ADD TODO</h2>
          <div class="input-type">
            <div class="input-type-btn">
              <span>Single</span>
            </div>
            <div class="input-type-btn">
              <span>Multiple</span>
            </div>
          </div>
        </div>
      </div>
      <!-- this is the body content (suggesed todo) -->
        <form action="/addTask" method="post">

        <div class="body-mainDiv">
        <div class="body-content">
          <h3>Let's Start With Some Good Habits</h3>
          <div class="pre-define-todo">
            <div class="contents">
              <div>
                <img src="../Images/glass.png" />
              </div>
              <p>Drink Water, Keep Healthy</p>
              <div>
                <button class="add" name="1">ADD</button>
              </div>
            </div>
            <div class="contents">
              <div>
                <img src="../Images/human.png" />
              </div>
              <p>Go Exercising</p>
              <div>
                <button class="add" name="2">ADD</button>
              </div>
            </div>
            <div class="contents">
              <div>
                <img src="../Images/ph_moon-fill.png" />
              </div>
              <p>Go To Bed Early</p>
              <div>
                <button class="add" name="3">ADD</button>
              </div>
            </div>
            <div class="contents">
              <div>
                <img src="../Images/ph_book-fill.png" />
              </div>
              <p>Keep Reading</p>
              <div>
                <button class="add" name="4">ADD</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>

    </div>

    <!-- this section is our single input form (it is separated from the inner container div for background blur)-->
    <div class="single-input-form">
      <!-- <form action="/store" method="post"> -->
        <div class="close-btn">
          <div>
            <span>X</span>
          </div>
        </div>
        <p>Pick Category</p>
        <div class="Task_Type">
          <input type="button" class="professional category" name="task_type" value="Professional" id="1" />

          <input type="button" class="personal " name="task_type" value="Personal" id="2" />
        </div>
        <div>
          <div class="inputdiv">
            <div>
              <label for="project">What on your todo?</label>
              <input type="text" placeholder="E.g Make Todo " name="Task_name" class="projectName" />
            </div>
            <div>
              <label for="project" placeholder="Get Date/Time">What on your due?</label>
              <input type="datetime-local" placeholder="Get Date/Time" class="dateTime" value="" name="dateTime" />
            </div>
          </div>
        </div>
        <div class="matix">
          <div class="urgentDiv">
            <label for="project">Urgent</label>
            <br />
            <input type="button" name="urgent-priority-btn" value="1" class="urgent-priority-btn urgent-yes data" />
            <input type="button" name="urgent-priority-btn" value="0" class="urgent-priority-btn urgent-no data" />
          </div>
          <div class="ImportantDiv">
            <label for="">Important</label>
            <br />
            <input type="button" name="important-priority-btn" value="1" class="important-priority-btn important-yes datas" />
            <input type="button" name="important-priority-btn" value="0" class="important-priority-btn important-no datas" />
          </div>
        </div>
        <button type="submit" onclick="store()" class="submit-btn">Submit</button>
    </div>
  </div>
  </div>

  <!-- this is multiple-input-form  -->
  <div class="multiple-input-form">
    <div class="allForm">
      <form action="" method="post" class="multiple-form">
        <div class="divCon">
          <div class="multiple-forms-div">
            <div class="main-div-closeBtn">
              <span>X</span>
            </div>
            <div class="multi-input-div">
              <label>what on your todo?</label>
              <div class="todo-input-box">
                <textarea name="Task_name" id="" cols="30" rows="10" placeholder="Enter your todo"></textarea>
              </div>
            </div>
            <div class="other-input-div">
              <div class="category-div">
                <label>pick category</label>
                <div class="task_type">
                  <input type="button" class="typeBtn" name="1" value="professional" id="professional" />
                  <input type="button" class="typeBtn " id="personal" name="2" value="personal" id="personal" />
                </div>
              </div>
              <div class="date-time-div">
                <label>what is your due?</label>
                <div>
                  <input type="datetime-local" placeholder="Get Date/Time" class="multiDateTime" value=""
                    name="artistid" />
                </div>
              </div>
              <div class="urgentDiv">
                <label>Urgent</label>
                <div>
                  <input type="button" value="Yes" class="urgent-priority-btn" />
                  <input type="button" value="No" class="urgent-priority-btn" />
                </div>
              </div>
              <div class="ImportantDiv">
                <label>Important</label>
                <div class="">
                  <input type="button" value="Yes" class="important-priority-btn" />
                  <input type="button" value="No" class="important-priority-btn" />
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="addOneMoreTodo">
          <span class="addDivBtn">+</span>
        </div>
        <div class="submit-btn-div">
          <button type="submit" class="submit-btn">Submit</button>
        </div>
      </form>
    </div>
  </div>
  </div>
  <script src="../JS/homepage.js"></script>
</body>

</html>