 using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;


namespace CarguerosWebServer.Services
{
    public class CDConcreteFactoryWebServer : CDAbstractFactory
    {
        //variables
        private static CDConcreteFactoryWebServer instance;

        //singleton
        private CDConcreteFactoryWebServer() { }

        public static CDConcreteFactoryWebServer Instance
        {
      get 
      {
         if (instance == null)
         {
             instance = new CDConcreteFactoryWebServer();
         }
         return instance;
      }
   }

        //interface methods
        public override CDBillingRepository CreateCDBillingRepository()
        {
            return new CDAccessBilling();
        }

        public override CDPackageRepository CreatePackageRepository()
        {
            return new CDAccessPackage();
        }

        public override CDContainerRepository CreateContainerRepository()
        {
            return new CDAccessContainer();
        }

        public override CDEmployeeRepository CreateEmployeeRepository()
        {
            return new CDAccessEmployee();
        }

        public override CDCostumerRepository CreateCustomerRepository()
        {
            return new CDAccessCostumer();
        }

    }
}