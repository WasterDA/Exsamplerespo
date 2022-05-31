<?php

namespace McDonaldsShop;

class View 
{

    //header
    public function header()
    {
        echo'<!DOCTYPE html>
                <html lang="de">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <link rel="stylesheet" href="css/style.css">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>McDonalds | Home</title>
                </head>
                <body>';
    }

    //body (Alle Body Functions)
    public function navBar() {

    }

    public function leftSelection()
    {
        echo'<main>
                <div class="bestellmenu">
                    <div class="linksauswahl">
                        <li  class="linksauswahl-item">
                            <form action="" method="post">
                                <input type="submit" name="fruestueck-button" class="links" value="Frühstück">
                            </form>
                        </li>
                        <li  class="linksauswahl-item">
                            <form action="" method="post">
                                <input type="submit" name="burger-button" class="links" value="Burger">
                            </form>
                        </li>
                        <li  class="linksauswahl-item">
                            <form action="" method="post">
                                <input type="submit" name="getraenke-button" class="links" value="Getränke">
                            </form>
                        </li>
                        <li class="linksauswahl-item">
                            <form action="" method="post">
                                <input type="submit" name="desert-button" class="links" value="Desert">
                            </form>
                        </li>
                    </div>';
    }

    public function rightSelection()
    {
        echo'      <div class="rechtsauswahl">




                    </div>
                </div>';

    }

    public function ShoppingCard()
    {
        echo'
        
        
        
            </main>';
    }


    //footer 
    public function footer()
    {
        echo '<footer>

              </footer>
              </body>
              </html>';
    }

}




?>