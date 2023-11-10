<?php
use PHPUnit\Framework\TestCase;

class testDashboardController extends TestCase{
    public function testDelete() {
        $DashBoardManager = $this->createMock(DashBoardManager::class);
        $MainController = $this->createMock(MainController::class);
        $dashBoardController = new DashBoardController($DashBoardManager, $MainController);
        $_POST["idDashBoard"] = 100;
        $DashBoardManager->expects($this->once())
                             ->method('DeleteByID')
                             ->with(100);
        $MainController->expects($this->once())
                           ->method('Index')
                           ->with($this->equalTo("DashBoard supprimé"));
        $dashBoardController->Delete();
    }

    public function testUpdateDashBoard() {
        $dashBoardController = new DashBoardController();
        $dashBoard = new DashBoard();
        $dashBoard->SetId(1);
        $dashBoard->SetUsername('JohnDoe');
        $dashBoard->SetIdUser(123);
        $reflection = new ReflectionClass('DashBoardController');
        $method = $reflection->getMethod('UpdateDashBoard');
        $method->setAccessible(true);
        $method->invoke($dashBoardController, $dashBoard);
    }
}
?>