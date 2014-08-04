using CarguerosWebServer.Models;
using System.Data;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CarguerosWebServer.Services
{
    public abstract class CDContainerRepository
    {
        public abstract List<Container> getTableContainer(DataSet dataSet);
        public abstract Container[] GetAllContacts();
        public abstract void showViewContainer();
       
    }
}