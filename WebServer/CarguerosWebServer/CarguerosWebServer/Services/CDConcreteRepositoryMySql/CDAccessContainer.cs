using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CarguerosWebServer.Services
{
    public class CDAccessContainer : CDContainerRepository
    {
        public override CDContainerRepository constructor()
        {
            return new CDAccessContainer();
        }
    }
}