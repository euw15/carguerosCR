using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CarguerosWebServer.Services
{
    public class CDAccessCostumer : CDCostumerRepository
    {
        public CDCostumerRepository constructor()
        {
            return new CDAccessCostumer();
        }
    }
}