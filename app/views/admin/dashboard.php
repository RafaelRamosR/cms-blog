<?php require_once ROUTE_APP . '/views/inc/header.php'; ?>
<?php require_once ROUTE_APP . '/views/inc/menu.php'; ?>

<div class="container-fluid dashboard">
  <div class="row">
    <div class="row nav-vertical col-md-2">
      <!-- navbar -->
      <?php require_once 'navbar.php'; ?>
    </div>

    <main class="col-md-10 col-sm-12">
      <h1 class="text-center mb-5 mt-5">Dashboard</h1>
      <div class="container-fluid">
        <div class="container">
          <div class="row" id="portfolio">
            <!-- users count -->
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card" id="storageCard">
                <div class="card-title">Usuarios</div>
                <div class="card-icon">
                  <ion-icon name="people-outline"></ion-icon>
                </div>
                <div class="card-data">999</div>
                <hr />
                <div class="card-hint">
                  <ion-icon name="people-outline"></ion-icon><a href="#">Mira las estadísticas.</a>
                </div>
              </div>
            </div>
            <!-- articles count -->
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card" id="loveCard">
                <div class="card-title">Artículos</div>
                <div class="card-icon">
                  <ion-icon name="reader-outline"></ion-icon>
                </div>
                <div class="card-data">501</div>
                <hr />
                <div class="card-hint">
                  <ion-icon name="reader-outline"></ion-icon><a href="#">Comparte tus logros.</a>
                </div>
              </div>
            </div>
            <!-- comments count -->
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card" id="pizzaCard">
                <div class="card-title">Comentarios</div>
                <div class="card-icon">
                  <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                </div>
                <div class="card-data">1200</div>
                <hr />
                <div class="card-hint">
                  <ion-icon name="chatbox-ellipses-outline"></ion-icon><a href="#">Observa las estádisticas.</a>
                </div>
              </div>
            </div>
            <!-- reactions count -->
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card" id="gameCard">
                <div class="card-title">Reacciones</div>
                <div class="card-icon">
                  <ion-icon name="heart-outline"></ion-icon>
                </div>
                <div class="card-data">1800</div>
                <hr />
                <div class="card-hint">
                  <ion-icon name="heart-outline"></ion-icon><a href="#">Comentarios recientes</a>
                </div>
              </div>
            </div>
            <!-- user chart -->
            <div class="col-12">
              <div class="card">
                <canvas id="userCanvas"></canvas>
              </div>
            </div>
            <!-- user chart -->
            <div class="col-12 col-md-6">
              <div class="card">
                <canvas id="popular"></canvas>
              </div>
            </div>
            <!-- user chart -->
            <div class="col-12 col-md-6">
              <div class="card">
                <canvas id="escritor"></canvas>
              </div>
            </div>
            <!-- table crud post -->
            <div class="col-12 projects mb-4">
              <div class="projects-inner table-responsive">
                <table class="projects-table table">
                  <thead>
                    <tr>
                      <th>Nickname</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Email</th>
                      <th>Picture</th>
                      <th>Estado</th>
                      <th class="text-center">Acciones</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>
                        <p>Master666</p>
                      </td>
                      <td>
                        <p>Raul</p>
                      </td>
                      <td>
                        <p>Balejo</p>
                      </td>
                      <td>
                        <p>raulmaster@gmail.com</p>
                      </td>
                      <td>
                        <p>http://localhost/cms/public/img/hola.png</p>
                      </td>
                      <td class="status">
                        <span class="status-text status-orange">Borrador</span>
                      </td>
                      <td>
                        <form class="form" method="POST">
                          <div class="selectric-wrapper selectric-action-box">
                            <div class="selectric-hide-select">
                              <select class="action-box" tabindex="0">
                                <option>Acciones</option>
                                <option>Visualizar</option>
                                <option>Modificar</option>
                                <option>Eliminar</option>
                              </select>
                            </div>
                          </div>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>Master666</p>
                      </td>
                      <td>
                        <p>Raul</p>
                      </td>
                      <td>
                        <p>Balejo</p>
                      </td>
                      <td>
                        <p>raulmaster@gmail.com</p>
                      </td>
                      <td>
                        <p>http://localhost/cms/public/img/hola.png</p>
                      </td>
                      <td class="status">
                        <span class="status-text status-green">Publicado</span>
                      </td>
                      <td>
                        <form class="form" method="POST">
                          <div class="selectric-wrapper selectric-action-box">
                            <div class="selectric-hide-select">
                              <select class="action-box" tabindex="0">
                                <option>Acciones</option>
                                <option>Visualizar</option>
                                <option>Modificar</option>
                                <option>Eliminar</option>
                              </select>
                            </div>
                          </div>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>Master666</p>
                      </td>
                      <td>
                        <p>Raul</p>
                      </td>
                      <td>
                        <p>Balejo</p>
                      </td>
                      <td>
                        <p>raulmaster@gmail.com</p>
                      </td>
                      <td>
                        <p>http://localhost/cms/public/img/hola.png</p>
                      </td>
                      <td class="status">
                        <span class="status-text status-red">No aprovado</span>
                      </td>
                      <td>
                        <form class="form" method="POST">
                          <div class="selectric-wrapper selectric-action-box">
                            <div class="selectric-hide-select">
                              <select class="action-box" tabindex="0">
                                <option>Acciones</option>
                                <option>Visualizar</option>
                                <option>Modificar</option>
                                <option>Eliminar</option>
                              </select>
                            </div>
                          </div>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="7" class="text-center">
                        <a href="#">Ver más</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>


          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<?php require_once ROUTE_APP . '/views/inc/footer.php'; ?>
<script>
  /* GLOBAL VALUES */
  const userCanvas = document.getElementById("userCanvas").getContext('2d');
  //Chart.defaults.global.defaultFontFamily = "Lato";
  //Chart.defaults.global.defaultFontSize = 18;

  const viewDataColor = userCanvas.createLinearGradient(0, 0, 255, 100)
  viewDataColor.addColorStop(0, "#5E35B1")
  viewDataColor.addColorStop(1, "#039BE5");
  const reactionDataColor = userCanvas.createLinearGradient(255, 192, 203, 100)
  reactionDataColor.addColorStop(0, "#F50057")
  reactionDataColor.addColorStop(1, "#FF8A80");
  const followDataColor = userCanvas.createLinearGradient(0, 128, 0, 100)
  followDataColor.addColorStop(0, "#43A047")
  followDataColor.addColorStop(1, "#59FF3B");
  const commentDataColor = userCanvas.createLinearGradient(255, 165, 0, 100)
  commentDataColor.addColorStop(0, "#FB8C00")
  commentDataColor.addColorStop(1, "#FFCA29");

  const viewData = {
    label: "Visitas",
    data: [0, 59, 75, 20, 20, 55, 40],
    fill: false,
    pointBackgroundColor: viewDataColor,
    borderColor: viewDataColor
  };

  const reactionData = {
    label: "Reacciones",
    data: [20, 15, 60, 60, 65, 30],
    //lineTension: 0,
    fill: false,
    pointBackgroundColor: reactionDataColor,
    borderColor: reactionDataColor
  };

  const followData = {
    label: "Articulos",
    data: [3, 6, 5, 10, 4, 23],
    fill: false,
    pointBackgroundColor: followDataColor,
    borderColor: followDataColor
  };

  const commentData = {
    label: "Comentarios",
    data: [0, 15, 30, 40, 10, 50],
    fill: false,
    pointBackgroundColor: commentDataColor,
    borderColor: commentDataColor
  };

  const userData = {
    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"],
    datasets: [viewData, reactionData, followData, commentData]
  };

  const chartOptions = {
    responsive: true,
    title: {
      display: true,
      text: 'ESTADÍSTICAS DE TUS ARTÍCULOS'
    },
    tooltips: {
      mode: 'index',
      intersect: false,
    },
    hover: {
      mode: 'nearest',
      intersect: true
    },
    scales: {
      xAxes: [{
        display: true,
        scaleLabel: {
          display: true,
          labelString: 'Meses'
        }
      }],
      yAxes: [{
        display: true,
        scaleLabel: {
          display: true,
          labelString: 'Valores'
        }
      }]
    }
  };

  const lineChart = new Chart(userCanvas, {
    type: 'line',
    data: userData,
    options: chartOptions
  });



  const popular = document.getElementById("popular").getContext('2d');

  const user1Data = {
    label: "Seguidores",
    data: [18, 20, 35, 28, 39],
    backgroundColor: viewDataColor,
    borderColor: viewDataColor
  };

  const user2Data = {
    label: "Reacciones",
    data: [7, 25, 30, 27, 30],
    backgroundColor: reactionDataColor,
    borderColor: reactionDataColor
  };

  const user3Data = {
    label: "Comentarios",
    data: [15, 30, 40, 20, 30],
    backgroundColor: commentDataColor,
    borderColor: commentDataColor
  };

  const barData = {
    labels: ["User 1", "User 2", "User 3", "User 4", "User 5"],
    datasets: [user1Data, user2Data, user3Data]
  };

  const barOptions = {
    title: {
        display: true,
        text: 'Population'
    }
  };
  const barChart = new Chart(popular, {
    type: 'bar',
    data: barData,
    options: barOptions
  });




  new Chart(document.getElementById("escritor"), {
    type: 'doughnut',
    data: {
      labels: ["User 1", "User 2", "User 3", "User 4", "User 5"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
        data: [78, 69, 34, 84, 33]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Usuarios que más postean'
      }
    }
  });
</script>