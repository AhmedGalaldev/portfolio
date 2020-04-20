<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <?php wp_head( ); ?>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Portfolio</a>   
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <?php wp_nav_menu(array(
                        
                        "theme_location"=>"main-menu",
                        "menu_class" => "navbar-nav mr-auto",
                        "container_class" => "collapse navbar-collapse",
                        "container_id" => "navbarSupportedContent",
                    ) );?>
                </li>
              </ul>
            
            
            
          
        
        </nav>

</header>