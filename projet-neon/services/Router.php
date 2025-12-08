<?php
class Router
{
    public function handleRequest(array $get) : void
    {
        $controller= new BlogController();
        if (isset($get['path']) && !empty($get['path']))
        {
            if (str_contains($get['path'],'article'))
            {
                $url = explode("/", $get['path']);
                $id = (int)$url[1];
                $controller->article($id);
            }

            else
            {
                $controller->notFound();
            }
            
        }

        else 
        {
            $controller->index();
        }
    }
}
?>