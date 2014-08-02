using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CarguerosWebServer.Services
{
    public class CDAccessEmployee : CDEmployeeRepository
    {
        public CDEmployeeRepository constructor()
        {
            return new CDAccessEmployee();
        }
    }
}