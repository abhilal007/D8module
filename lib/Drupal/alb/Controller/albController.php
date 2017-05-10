<?php
  
  namespace Drupal\alb\Controller
  
  use Drupal\core\Controller\ControllerInterface;
  use Symfony\component\DependencyInjection\ContainerInterface;
  
  class albController implements ControllerInterface{
    public static function create(ContainerInterface $container){
        return new static ($container->get('module_handler'));
     }
  
  public function albpage(){
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello World!'),
      );
  
  return $build;
  
  }
  
}
