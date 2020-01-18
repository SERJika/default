# require 'susy'
# require 'breakpoint'
# require 'compass-colors'
require 'css-lightbox'

project_type = :stand_alone  # Symbol :stand_alone (default) | :rails.
environment  = :development  # Symbol :development (default) | :production
# project_path = "/"  # String set the path to the root of the project. Not needed in :stand_alone mode where it can be inferred by context.
http_path    = "/"  # String  The path to the project when running within the web server. Defaults to "/".
css_dir      = "."  # String Defaults to "stylesheets", is relative to the project_path. 
# css_path     = ""  # String  The full path to where css stylesheets are kept. Defaults to <project_path>/<css_dir>.
# http_stylesheets_path =  # String  The full http path to stylesheets on the web server. Defaults to http_path + "/" + css_dir.
sass_dir     = "sass"  # String  It is relative to the project_path. Defaults to "sass".
# sass_path    = ""  # String  The full path to where sass stylesheets are kept. Defaults to <project_path>/<sass_dir>.
images_dir   = "img"  # String  It is relative to the project_path. Defaults to "images".
# images_path  = ""  # String  The full path to where images are kept. Defaults to <project_path>/<images_dir>.
# http_images_path = ""  # String  The full http path to images on the web server. Defaults to http_path + "/" + images_dir.
# generated_images_dir = ""  # String  The directory where generated images are kept. It is relative to the project_path. Defaults to the value of images_dir.
# generated_images_path = ""  # String  The full path to where generated images are kept. Defaults to the value of <project_path>/<generated_images_dir>.
# http_generated_images_path = ""  # String  The full http path to generated images on the web server. Defaults to http_path + "/" + generated_images_dir.
javascripts_dir = "js"  # String  It is relative to the project_path. Defaults to "javascripts".
# javascripts_path = ""  # String  The full path to where javascripts are kept. Defaults to <project_path>/<javascripts_dir>.
# http_javascripts_path = ""  # String  The full http path to javascripts on the web server. Defaults to http_path + "/" + javascripts_dir.
output_style    = :expanded  # Symbol  The output style for the compiled css – :nested, :expanded, :compact, :compressed.
relative_assets = true  # Boolean Indicates whether the compass helper functions should generate relative urls from the generated css to assets, or absolute urls using the http path for that asset type.
# additional_import_paths = ""  # Array of Strings    Other paths on your system from which to import sass files. See the add_import_path function for a simpler approach.
sourcemap = true  # Boolean Set this to true to enable sourcemap output.
# disable_warnings = true/false  # Boolean Set this to true to silence deprecation warnings.
# sass_options =   # Hash    These options are passed directly to the Sass compiler. For more details on the format of sass options, please read the sass options documentation.
# line_comments = true/false  # Boolean Indicates whether line comments should be added to compiled css that says where the selectors were defined. Defaults to false in production mode, true in development mode.
preferred_syntax = :scss  # Symbol  Can be :scss or :sass. Defaults to :scss.
fonts_dir  = "fonts"  # String  Standalone projects will default to <css_dir>/fonts. Rails projects will default to "public/fonts".
# fonts_path = ""  # String  The full path to where font files are kept. Defaults to <project_path>/<fonts_dir>.
# http_fonts_path = ""  # String  The full http path to font files on the web server.
# http_fonts_dir = ""  # String  The relative http path to font files on the web server.
sprite_engine = :chunky_png  # Symbol  Defaults to :chunky_png
chunky_png_options = {:compression => Zlib::BEST_COMPRESSION}  # Hash    Defaults to {:compression => Zlib::BEST_COMPRESSION}. See the chunky_png wiki for more information
# sprite_load_path = ""  # Array   Defaults to [images_path]