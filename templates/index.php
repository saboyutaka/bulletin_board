<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>けいじばん</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
          integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
          crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
          integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
          crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
          integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
          crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
  <h1>けいじばん</h1>
  <div class="card bg-light">
    <div class="card-body">
      <form>
        <div class="form-group">
          <label for="name">なまえ</label>
          <input type="text" class="form-control" id="name" placeholder="なまえをにゅうりょくしてね">
          <small id="emailHelp" class="form-text text-muted">にゅうりょくしないばあい、名無しさんになります</small>
        </div>
        <div class="form-group">
          <label for="body">ほんぶん</label>
          <input type="text" class="form-control" id="body" placeholder="ほんぶんをにゅうりょくしてね" required>
        </div>
        <button type="submit" class="btn btn-primary">そうしん</button>
      </form>

    </div>
  </div>

  <div class="comments mt-5">
      <?php foreach ($comments as $comment) { ?>
        <div class="card mb-3">
          <div class="card-body">

            <h5 class="card-title d-flex justify-content-between align-items-center">
              <span><?= $comment["name"] ?></span>
              <small><?= $comment["created_at"] ?></small>
            </h5>

            <p class="card-text"><?= $comment["body"] ?></p>
          </div>
        </div>
      <?php } ?>
  </div>
</div>
</body>
</html>
