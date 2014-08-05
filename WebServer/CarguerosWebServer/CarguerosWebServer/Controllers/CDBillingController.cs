using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using CarguerosWebServer.Services;
using CarguerosWebServer.Models;

namespace CarguerosWebServer.Controllers{
       
    public class CDBillingController : ApiController
    {
       
        private CDBillingRepository billingRepository;

        public CDBillingController()
        {
            
            CDConcreteFactoryWebServer factory = CDConcreteFactoryWebServer.Instance;
            this.billingRepository = factory.CreateCDBillingRepository();
           
           
        }

        [HttpGet]
        [ActionName("Pedro")]
        public Billing[] oscar(String id, String id1,String id2)
        {
            System.Diagnostics.Debug.WriteLine(id);
            System.Diagnostics.Debug.WriteLine(id1);
            System.Diagnostics.Debug.WriteLine(id2);
            //http://localhost:49495/api/cdbilling/pedro?id=hola&id1=comoestas&id2=webon          
            return billingRepository.showAllBilling();
            
        }

        [HttpPost]
        [ActionName("Peter")]
        public Billing[] edward(String id, String id1, String id2)
        {
            System.Diagnostics.Debug.WriteLine(id);
            System.Diagnostics.Debug.WriteLine(id1);
            System.Diagnostics.Debug.WriteLine(id2);
            //http://localhost:49495/api/cdbilling/peter?id=hola&id1=comoestas&id2=webon 
            return billingRepository.showAllBilling();
           

        }

    }
}
