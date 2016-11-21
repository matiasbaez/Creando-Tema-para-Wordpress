
<?php 
	//Creo el archivo de funciones


	// Registro el menu para poder usar
	register_nav_menus( 
		array(
			'principal' => 'Menu CaacupeWeb', // La ubicacion y el nombre del menu
			'footer' => 'Menu Footer'
		)
	);


	// Activo el soporte para los Widgets
	if (function_exists('register_sidebar')) { // Si existe la funcion
		
		register_sidebar( // Registro un sidebar | Ahora ago asi porque voy a usar varios 

			array(
				'name'          => 'Entradas Recientes Footer', // El nombre del sidebar
				'before_title'  => '<header><h2>',
				'after_title'   => '</h2></header>'
				// Y dejo solo lo que voy a usar
			)
		);

		register_sidebar(
			array(
				'name' => 'Ultimas Categorias Footer',
				'before_title'  => '<header><h2>',
				'after_title'   => '</h2></header>'
			)
		);
	}

	// Activo el soporte para las imagenes de las ENTRADAS O PUBLICACIONES

	if ( function_exists('add_theme_support')) {
		add_theme_support( 'post-thumbnails' ); // Con esta linea se activa

		//set_post_thumbnail_size(150, 150, true);

		// Agrego un tamaño de imagen de acuerdo al que quiero usar
		add_image_size('vista-previa-entrada', 374, 260, true); // Nombre, ancho, alto, recortado?;
		add_image_size('vista-lectura-entrada', 783, 290, true); // Nombre, ancho, alto, recortado?;
		add_image_size('miniatura-blog', 580, 272, true); // Nombre, ancho, alto, recortado?;
	}


	/* Otra forma de agregar los estilos y scripts, etc
	   Ahora se utilizara los HOOCK ACTIONS
	   hook action == add_action() */

	// Los valores van en este orden (nombre_archivo, ubicacion, de quien depende, la version, donde ubicar - header o antes del body) false = header, true = antes body


	function recursos_del_tema() {
		wp_enqueue_style( 'style', get_stylesheet_uri());

		wp_enqueue_script( 'dropotron', get_template_directory_uri().'/assets/js/jquery.dropotron.min.js', array('jquery'), '1.4.3', true );

		wp_enqueue_script( 'skel', get_template_directory_uri().'/assets/js/skel.min.js', array('jquery'), '3.0.1 ', true );
	
		wp_enqueue_script( 'skel-viewport', get_template_directory_uri().'/assets/js/skel-viewport.min.js', array('jquery'), '3.0.1 ', true );

		wp_enqueue_script( 'util', get_template_directory_uri().'/assets/js/util.js', array('jquery'), '1.11.3', true );

		wp_enqueue_script( 'respond', get_template_directory_uri().'/assets/js/ie/respond.min.js', array('jquery'), '1.11.3', true );
	
		wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.11.3', true );
	}

	add_action( 'wp_enqueue_scripts', 'recursos_del_tema' );

?>