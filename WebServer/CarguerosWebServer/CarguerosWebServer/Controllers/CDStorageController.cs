﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using CarguerosWebServer.Services;
using CarguerosWebServer.Models;

namespace CarguerosWebServer.Controllers
{
    public class CDStorageController : ApiController
    {
        private CDStorageRepository storageRepository;

        public CDStorageController()
        {
            
            CDConcreteFactoryWebServer factory = CDConcreteFactoryWebServer.Instance;
            this.storageRepository = factory.CreateCDStorageRepository();
           
           
        }
       
        [HttpGet]
        [ActionName("1")]
        public Storage[] allStorage()
        {    
            return storageRepository.showAllStorage();            
        }      
    }
}
