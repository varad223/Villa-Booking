const panoramaImage = new PANOLENS.ImagePanorama('image1.jpeg');
const imageContainer = document.querySelector(".image-container");

const viewer = new PANOLENS.Viewer({
  container: imageContainer,
  autoRotate: true,
  autoRotateSpeed: 0.3,
  controlBar: true,
});

viewer.add(panoramaImage);
/*<script>

/*const panorama = new PANOLENS.ImagePanorama( 'asset/textures/equirectangular/field.jpg' );
const viewer = new PANOLENS.Viewer();
viewer.add( panorama );

</script>*/
