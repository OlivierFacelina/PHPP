<?php 

if(isset($_GET["page"])) {
    switch($_GET["page"]) {
        case "create-user":
            require './controllers/userLoginControllers.php';
            break;
            case "incomes":
                require './controllers/incomesControllers.php';
                break;
                case "expenses":
                    require './controllers/expensesControllers.php';
                    break;
                    case "details":
                        require './controllers/detailsControllers.php';
                        break;
                        case "update_incomes":
                            require './controllers/updateIncControllers.php';
                            break;
                            case "delete_incomes":
                                require './controllers/deleteIncControllers.php';
                                break;
                                case "update_expenses":
                                    require './controllers/updateExpControllers.php';
                                    break;  
                                    case "delete_expenses":
                                        require './controllers/deleteExpControllers.php';
                                        break;
                                        case "management":
                                            require './controllers/managementControllers.php';
                                            break;
                                            default:
                                                require './controllers/error404.php';
                                                break;
    }
} else {
    require './controllers/userLoginControllers.php';
}