<?php
function displayCards($member, $i) {
?>
  <header class="resume-header pt-4 pt-md-0">
    <div class="row">

      <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
        <img
          class="picture"
          src="<?= $member['image'] ?>"
          alt="Headshot of <?= $member['firstname'].' '.$member['lastname'] ?>"
        >
      </div>

      <div class="col">
        <div class="row p-4 justify-content-center justify-content-md-between">
          <div class="primary-info col-auto">
            <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
              <?= $member['firstname'].' '.$member['lastname'] ?>
            </h1>
            
            <div class="title mb-3">
              <?= $member['role'] ?>
            </div>
            
            <a href="detail.php?index=<?= $i ?>" class="btn btn-secondary">
              See full profile
            </a>
          </div>

          <div class="secondary-info col-auto mt-2">
          </div>
        </div>
      </div>
    </div>
  </header>
<?php
}

function listNames($members) {
  for ($i = 0; $i < count($members); $i++) {
    if (($i != 0) && (count($members) == 2)) {
      echo ' and ';
    }
    elseif (($i == count($members) - 1) && (count($members) != 1)) {
      echo ', and ';
    }
    elseif ($i != 0) {
      echo ', ';
    }

    echo $members[$i]['firstname'].' '.$members[$i]['lastname'];
  } 
}
  
?>