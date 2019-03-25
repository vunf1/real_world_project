/**
 * loaded on loadscript
 *  REQUIRE:
 * <script src="<?php base_url()?>assets/three.js"></script>
 * <script src="<?php base_url()?>assets/OrbitControls.js"></script>
 * <script src="<?php base_url()?>assets/GLTFLoader.js"></script>
 */
class TD_class {//Joao
    constructor(buildCode,elementID,percW,percH) { 
        this.buildCode = buildCode;
        this.elementID = elementID;
        this.percW = percW;
        this.percH = percH;

        this.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        this.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        this.container;
        this.camera;
        this.controls;
        this.renderer;
        this.scene;
        this.mesh;
        this.mixers = [];
        this.clock = new THREE.Clock();

    }
    

  init() {
      console.log("elementID: "+this.elementID);

      this.container = document.querySelector( '#'+this.elementID );

      console.log("container: "+this.buildCode);

      this.scene = new THREE.Scene();
      this.scene.background = new THREE.Color( 0xffffff );

      console.log("width: "+this.width);
      console.log("height: "+this.height);
      console.log("new W :"+this.width*this.percW/100,"new H :"+ this.height*this.percH/100) ;
      this.createCamera();
      
      console.log("--- CAMARA ---");
      this.createControls();
      console.log("--- createControls ---");
      this.createLights();
      console.log("--- createLights ---");
      this.loadModels();
      console.log("--- loadModels ---");
      this.createRenderer();
      console.log("--- CAMARA ---");

      this.renderer.setAnimationLoop( () => {

          this.update();
          this.render();

      } );
      console.log("3D Block created");
      console.log("------------------");

  }

  createCamera() {
  /**
   * View Frustum
   */
  var degree=Math.PI/180;
    this.camera = new THREE.PerspectiveCamera( 45,this.width / this.height, 1, 1000 );
    this.camera.position.x=80;
    this.camera.position.y=400;
      this.camera.position.z=20;

      this.camera.updateProjectionMatrix();
      

  }

  createControls() {
      
      this.controls = new THREE.OrbitControls( this.camera, this.container );
      
  }
  createLights() {

    const ambientLight = new THREE.HemisphereLight( 0xddeeff, 0x0f0e0d, 5 );

    const mainLight = new THREE.DirectionalLight( 0xffffff, 5 );
    mainLight.position.set( 10, 10, 10 );

    

  }

  loadModels() {

    const loader = new THREE.GLTFLoader();

    // A reusable  to set up the models. We're passing in a position parameter
    // so that they can be individually placed around the this.scene
    const onLoad = ( gltf, position ) => {

      const model = gltf.scene.children[ 0 ];
      model.position.copy( position );

      const animation = gltf.animations[ 0 ];


      this.scene.add( model );

    };

    // the loader will report the loading progress to this 
    const onProgress = (messages) => {};

    // the loader will send any error messages to this , and we'll log
    // them to to console
    const onError = ( errorMessage ) => { console.log( errorMessage ); };

    // load the first model. Each model is loaded asynchronously,
    // so don't make any assumption about which one will finish loading first
    const imgObject = new THREE.Vector3(20, 40, 30 );
    loader.load( './assets/building/'+this.buildCode+'.gltf', gltf => onLoad( gltf, imgObject ), onProgress, onError );
      console.log(imgObject);

  }

  createRenderer() {

    // create a WebGLRenderer and set its this.width and $this.height
    this.renderer = new THREE.WebGLRenderer( { antialias: true } );
    this.renderer.setSize(this.width*this.percW/100, this.height*this.percH/100 );

    this.renderer.setPixelRatio( window.devicePixelRatio );

    this.renderer.gammaFactor = 2.2;
    this.renderer.gammaOutput = true;

    this.renderer.physicallyCorrectLights = true;

    //Low graphic use
    this.renderer.BasicShadowMap;
    this.renderer.NoToneMapping;
    this.renderer.CullFaceNone;
    
      console.log(this.renderer.domElement);
    this.container.appendChild( this.renderer.domElement );

  }

  update() {

    const delta = this.clock.getDelta();

    this.mixers.forEach( ( mixer ) => { mixer.update( delta ); } );

  }

  render() {

    this.renderer.render( this.scene, this.camera );

  }

  onWindowResize() {

    this.camera.aspect = this.height/2 ;

    // update the this.camera's frustum
    this.camera.updateProjectionMatrix();

    this.renderer.setSize( this.width*this.percW/100, this.height*this.percH/100);

  }



// CALL IT after create new instance init();



}