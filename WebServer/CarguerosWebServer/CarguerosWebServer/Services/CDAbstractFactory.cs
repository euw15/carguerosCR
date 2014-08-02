using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;


namespace CarguerosWebServer.Services
{
    public abstract class CDAbstractFactory
    {
        public abstract CDContainerRepository CreateContainerRepository();
        public abstract CDCostumerRepository CreateCustomerRepository();
        public abstract CDEmployeeRepository CreateEmployeeRepository();
        public abstract CDPackageRepository CreatePackageRepository();
        public abstract CDBillingRepository CreateCDBillingRepository();
    }
}