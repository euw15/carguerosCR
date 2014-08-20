var xhr = new XMLHttpRequest();
xhr.open("GET", "http://cargodispatcher.elasticbeanstalk.com/api/estudiante", false);
xhr.setRequestHeader('Content-Type', 'text/xml');


xhr.send();

xmlDocument = xhr.responseXML;

alert(xmlDocument.childNodes[0].textContent);