<?php require_once ROUTE_APP . '/views/inc/header.php'; ?>
<?php require_once ROUTE_APP . '/views/inc/menu.php'; ?>

<!-- header image - portada -->
<div class="header-image">
  <input type="file" name="image" class="form-file">
  <img src="<?php echo ROUTE_URL; ?>img/no-image.jpg" alt="no-image" id="postImage">
</div>

<!-- content post -->
<section class="post-area">
  <div class="container">
    <div class="row">

      <div class="col-lg-1 col-md-0"></div>

      <div class="col-lg-10 col-md-12 mb-5">
        <div class="main-post">

          <div class="container">
            <!-- post-top-area -->
            <div class="container">
              <select class="btn-form" name="category">
                <option value="">CATEGORÍA</option>
                <option value="option1">OPTION 1</option>
                <option value="option2">OPTION 2</option>
                <option value="option3">OPTION 3</option>
              </select>
              <h2 class="title" contenteditable="true">Título del post</h2>
            </div>
            <!-- trix-editor -->
            <div class="col-12 mt-3">
              <form>
                <input id="x" type="hidden" name="content">
                <trix-editor input="x"></trix-editor>
              </form>
            </div>

            <!-- post-bottom-area -->
            <div class="container mt-3 text-right">
              <button class="btn btn-form">Descartar <ion-icon name="sad-outline"></ion-icon></button>
              <button class="btn btn-form">Guardar <ion-icon name="save-outline"></ion-icon></button>
              <button class="btn btn-form">Publicar <ion-icon name="send"></ion-icon></button>
            </div>
          </div>

        </div><!-- main-post -->
      </div><!-- col-lg-8 col-md-12 -->
    </div><!-- row -->
  </div><!-- container -->
</section>

<?php require_once ROUTE_APP . '/views/inc/footer.php'; ?>
<script>
  const inputFile = document.querySelector(".form-file")

  inputFile.addEventListener("change", () => {

    // Los archivos seleccionados, pueden ser muchos o uno
    const selectImg = inputFile.files
    // Si no hay archivos salimos de la función y quitamos la imagen
    if (!selectImg || !selectImg.length) {
      return;
    }
    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
    const firstFile = selectImg[0];
    // Lo convertimos a un objeto de tipo objectURL
    const urlImg = URL.createObjectURL(firstFile)
    // Y a la fuente de la imagen le ponemos el objectURL
    postImage.src = urlImg
  });
</script>