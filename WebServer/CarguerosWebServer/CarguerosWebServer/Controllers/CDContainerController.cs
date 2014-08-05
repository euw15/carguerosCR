using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using CarguerosWebServer.Services;
using CarguerosWebServer.Models;

namespace CarguerosWebServer.Controllers
{
    public class CDContainerController : ApiController
    {
        private CDContainerRepository containerRepository;

        public CDContainerController()
        {
            
            CDConcreteFactoryWebServer factory = CDConcreteFactoryWebServer.Instance;
            this.containerRepository = factory.CreateContainerRepository();
           
           
        }

        public Container[] Get()
        {
            return containerRepository.GetAllContacts();
        }


    }
}
