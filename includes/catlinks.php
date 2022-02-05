
<div class="cat-tab-container cat-container">
<ul class="tabs ">

  
  <li class="browse-goal">
    <a class="nav-link" href="browse.php">Browse Goals</a>
  </li>

  <li class="add-goal">
    <a class="nav-link" href="dashboard.php">Add Goal</a>
  </li>

  <li class="accomplished-goals">
    <a class="nav-link" href="accompGoals.php">Accomplished</a>
  </li>

  <li class="pending-goals">
    <a class="nav-link" href="pendingGoals.php">Pending</a>
  </li>


</ul>
</div>


  <!-- <ul class="nav nav-tabs">
  <li class="nav-item">
  <a  href="browse.php">Browse Goals</a
  </li>
  <li class="nav-item">
  <a href="dashboard.php">Add Goal</a>
  </li>
  <li class="nav-item">
  <a href="dashboard.php">Add Goal</a>
  </li>
  <li class="nav-item">
  <a href="accompGoals.php">Accomplished</a>
  </li>

  <li class="nav-item">
  <a href="pendingGoals.php">Pending</a>
  </li>


</ul> -->


  <!-- <ul class="cat-header">
  <li class="browse-a"> <a  href="browse.php">Browse Goals</a>  </li>
  <li class="add-a"><a href="dashboard.php">Add Goal</a></li>
  <li class = "accomp-a"><a href="accompGoals.php">Accomplished</a></li>
  <li class="pending-a"><a href="pendingGoals.php">Pending</a></li>

  </ul> -->

 
  <script>
    $(".cat-tab-container li").on("click",function(){
      console.log('Linked has been clicked');
    $(".cat-tab-container li").removeClass('active');
    $(this).addClass('active');
});
  </script>
