<?php 

if(isset($_GET["page"])) {
    switch($_GET["page"]) {
        case "create-user":
            require './controllers/userLoginControllers.php';
            break;
            case "incomes":
                require './controllers/incomesControllers.php';
                break;
                case "page3":
                    require './controllers/page3Controllers.php';
                    break;
                    case "page4":
                        require './controllers/page4Controllers.php';
                        break;
                        case "page5":
                            require './controllers/page5Controllers.php';
                            break;
                            case "page6":
                                require './controllers/page6Controllers.php';
                                break;
                                case "page7":
                                    require './controllers/page7Controllers.php';
                                    break;  
                                    default:
                                        require './controllers/error404.php';
                                        break;
    }
} else {
    require './controllers/userLoginControllers.php';
}