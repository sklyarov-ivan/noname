<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Класс для получения виджетов
 */

class Widget {

    protected $_controllers_folder  = 'widgets';    // Название папки с контроллерами виджетов
    protected $_config_filename     = 'widgets';    // Название файла конфигураций виджетов
    protected $_route_name          = 'widgets';    // Название файла конфигураций виджетов по умолчанию
    protected $_params              = array();      // Массив передаваемых параметров
    protected $_widget_name;                        // Название виждета (контроллер)


     /*
      * Вызов виджета Widget::factory('widget_name')->render();
      * @param   string  Название виджета
      * @param   array   Массив передаваемых параметров
      * @param   string  Название роута данного виджета
     */
    public static function factory($widget_name, array $params = NULL, $route_name = NULL)
    {
        return new Widget($widget_name, $params, $route_name);
    }



    /*
     * Вызов виджета Widget::load('widget_name', array('param' => 'val'), 'route_name');
     * @param   string  Название виджета
     * @param   array   Массив передаваемых параметров
     * @param   string  Название роута данного виджета
     */
    public static function load($widget_name, array $params = NULL, $route_name = NULL)
    {
        $widget = new Widget($widget_name, $params, $route_name);
        return $widget->render();
    }


    public function __construct($widget_name, array $params = NULL, $route_name = NULL)
    {
        if ($params != NULL)
        {
            $this->_params = $params;
        }

        if ($route_name != NULL)
        {
            $this->_route_name = $route_name;
        }

        $this->_widget_name = $widget_name;
    }

    public function render()
    {
        // Получаем текущий контроллер и экшен
        $controller = Request::current()->controller();
        $action = Request::current()->action();

        // Загружаем файл конфигураций
         $widget_config = Kohana::$config->load("$this->_config_filename")->get($this->_widget_name);
   
//  
         // Запрещаем вывод виджета в экшенах, указанных в конфигах
         if (isset($widget_config[$controller]) AND $widget_config[$controller] != NULL)
         {
             if (in_array($action, $widget_config))
             {
                return NULL;
             }

             if (in_array('all_actions', $widget_config))
             {
                return NULL;
             }
         }

       $this->_params['controller'] = $this->_widget_name;
       $url = Route::get($this->_route_name)->uri($this->_params);
         
       return Request::factory($url)->execute();
    }

}
