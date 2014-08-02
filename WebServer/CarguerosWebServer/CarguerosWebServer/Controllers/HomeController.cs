using System.Net;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Web.Http;
using System.Net.Http;
using CarguerosWebServer.Services;

namespace CarguerosWebServer.Controllers
{
    public class HomeController : Controller
    {
        private CDConcreteFactoryWebServer factory;

        public ActionResult Index()
        {
            return View();
        }

        public void Hola(){
            CDConcreteFactoryWebServer concrete= CDConcreteFactoryWebServer.Instance;
            CDContainerRepository container = concrete.CreateContainerRepository();
            
            

              
        }
    }
}
