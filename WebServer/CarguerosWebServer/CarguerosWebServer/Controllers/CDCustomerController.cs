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
    public class CDCustomerController : ApiController
    {
        private CDCustomerRepository customerRepository;

         public CDCustomerController()
        {
            
            CDConcreteFactoryWebServer factory = CDConcreteFactoryWebServer.Instance;
            this.customerRepository = factory.CreateCDCustomerRepository();
           
           
        }
       
        [HttpGet]
        [ActionName("1")]
        public Customer[] allBilling()
        {    
            return customerRepository.showAllCustomer();            
        }      
    }
}
