<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="25"/>
    <title>Vybz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/css/uikit.min.css" />
    <link rel="stylesheet" href="css/action.css" type="text/css"/>
  </head>
  <body>
<div class="uk-background-cover uk-height-large" style="background-image: url(https://picsum.photos/g/1600/500);">
      <nav class="uk-navbar-container uk-container uk-container-expand uk-background-cover" style="background:rgba(0,0,0,0.2);" uk-navbar >

    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Logo</a></li>
        </ul>

    </div>

    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav uk-visible@s">
            <li class="uk-active"><a href="events.php">Event</a></li>
            <li class="uk-active"><a href="update.php">Update</a></li>
            <li class="uk-active"><a href="#">Delete</a></li>
            <li class="uk-active"><a href="#">Log out</a></li>

        </ul>
        <ul class="uk-navbar-nav">
          <li class="uk-hidden@s"><a href="#offcanvas-slide" class="uk-button uk-button-default" uk-toggle uk-icon="icon: menu" ></a>
          </li>
        </ul>
    </div>
</nav>

<h2 class="uk-container uk-container-small title">This is why we love Music</h2>
</div>

<!-- Menu pour format mobile-->

<div id="offcanvas-slide" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-default">
            <li class="uk-nav-header"><a href="#">Logo</a></li>
            <li></li>
            <li class="uk-active">Header</li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Update</a></li>
            <li><a href="#">Delete</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Log out</a></li>
        </ul>

    </div>

</div>

<!-- Fin menu pour format mobile-->


  <div class="uk-container uk-container-large section">
  <h4>Insert Elements</h4>
  <div class= "uk-container uk-container-small">
    <form class="uk-form-horizontal uk-margin-large">

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Text</label>
        <div class="uk-form-controls">
            <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Nom">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Text</label>
        <div class="uk-form-controls">
            <textarea class="uk-textarea uk-form-width-large" id="form-horizontal-text" type="textarea" placeholder="Description"></textarea>
        </div>
    </div>



    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Select</label>
        <div class="uk-form-controls">
            <select class="uk-select uk-form-width-large" id="form-horizontal-select">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-form-label">Radio</div>
        <div class="uk-form-controls uk-form-controls-text">
            <label><input class="uk-radio uk-form-width-large" type="radio" name="radio1"> Option 01</label><br>
            <label><input class="uk-radio uk-form-width-large" type="radio" name="radio1"> Option 02</label>
        </div>
    </div>
    <button class="uk-form-width-large">Sub</button>
</form>
</div>
  </div>

<div class="uk-container  uk-container-large footer">
    
</div>




    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/js/uikit-icons.min.js"></script>
  </body>
</html>
