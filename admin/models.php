<?php
include '../include/config.php';
include '../include/stats.php';

include '../api/getModel.php';
?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Hotwheels DB - Admin</title>

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="../css/dash_styles.css">
    <link rel="stylesheet" href="../css/model_table.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript">
    
    </script>

  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Admin</span>
          <div class="mdl-layout-spacer"></div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">LINK</li>
            <li class="mdl-menu__item">LINK</li>
            <li class="mdl-menu__item">LINK</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="../img/profile_placeholder.png" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>[user / email here]</span>
            <div class="mdl-layout-spacer"></div>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href="models.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">directions_car_filled</i>Models</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">account_circle</i>Users</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>Bottom Link</a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid ">
        <div style="display: flex; justify-content: center;" class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid">
        <h3 class="mdl-card__title-text">Models</h3>
        </div>
        <div style="display: flex; justify-content: center;" class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--3-col mdl-grid">
        <h3 class="mdl-card__title-text">Add Model</h3>
        </div>
          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--9-col">
            <!--<table id="model_table" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                <thead>
                    <tr>
                    <th>Model ID</th>
                    <th>Name</th>
                    <th>Set</th>
                    <th>Set #</th>
                    <th>Series</th>
                    <th>Edit</th>
                    </tr>
                </thead>
            </table>
            -->
            <div class="row">
              <div id="admin" class="col s12">
                <div class="card material-table">
                  <div class="table-header">
                    <div class="actions">
                      <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
                    </div>
                  </div>
                  <table id="model_table">
                    <thead>
                      <tr>
                        <th>Model ID</th>
                        <th>Name</th>
                        <th>Set</th>
                        <th>Age</th>
                        <th>Series</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--3-col">
            <form method="post">
            
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="model_id" name="model_id">
                    <label class="mdl-textfield__label" for="model_id">Model ID</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="model_name" name="name">
                    <label class="mdl-textfield__label" for="model_name">Model Name</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <select class="mdl-textfield__input" id="set_id" name="set_id">
                    <?php
                    foreach(get_set(NULL) as $set)
                    {
                        echo('<option value="'.$set['set_id'].'">'.$set['name'].'</option>');
                    }
                    ?>
                    </select>
                    <label class="mdl-textfield__label" for="set_id">Set</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="set_number" name="set_number">
                    <label class="mdl-textfield__label" for="set_number">Set #</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <select class="mdl-textfield__input" id="series" name="series_id">
                    <?php
                    foreach(get_series(NULL) as $series)
                    {
                        echo('<option value="'.$series['series_id'].'">'.$series['name'].' '.$series['year'].'</option>');
                    }
                    ?>
                    </select>
                    <label class="mdl-textfield__label" for="series">Series</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="model_img" name="image">
                    <label class="mdl-textfield__label" for="model_img">Model Image</label>
                </div>

                <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" onclick="return addModel();">
            </form>
            </div>
            <div id="new_model_toast" class="mdl-js-snackbar mdl-snackbar">
              <div class="mdl-snackbar__text"></div>
              <button class="mdl-snackbar__action" type="button"></button>
            </div>
        </div>
      </main>
    </div>
    <script src="../js/model_table.js"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
