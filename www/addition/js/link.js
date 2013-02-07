var $hostname = document.location.hostname;
var $http = new RegExp("http://");
if (!$http.exec($hostname))
    {
        $hostname = 'http://'+$hostname;
    }
 
    