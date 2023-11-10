<?php
use PHPUnit\Framework\TestCase;

class testDashboardController extends TestCase{
    public function testDelete() {
        $DashBoardManager = $this->createMock(DashBoardManager::class);
        $MainController = $this->createMock(MainController::class);
        $dashBoardController = new DashBoardController($DashBoardManager, $MainController);
        $_POST["idDashBoard"] = 123;
        $DashBoardManager->expects($this->once())
                             ->method('DeleteByID')
                             ->with(123);
        $MainController->expects($this->once())
                           ->method('Index')
                           ->with($this->equalTo("DashBoard supprimé"));
        $dashBoardController->Delete();
    }
}
?>