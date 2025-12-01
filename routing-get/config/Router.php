<?php
    class Router
    {
        public function handleRequest(array $get) : void
        {
            if(isset($_GET["route"]))
            {
                if($_GET["route"] === "a-propos")
                {
                    $ctrl = new PageController();
                    $ctrl->about();
                }

                else if ($_GET["route"] === "contact")
                {
                    $ctrl = new PageController();
                    $ctrl->contact();
                }

                else
                {
                    $ctrl = new PageController();
                    $ctrl->notFound();
                }
            }

            else
            {
                $ctrl = new PageController();
                $ctrl->home();
            }
        }
    }
?>