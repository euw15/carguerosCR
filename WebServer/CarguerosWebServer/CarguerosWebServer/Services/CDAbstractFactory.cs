using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using CarguerosWebServer.Services.ConcreteRepository;

namespace CarguerosWebServer.Services
{
    public class CDAbstractFactory
    {
        //variables
        private static CDAbstractFactory instance;

        //methods
        private CDAbstractFactory() { }

        public static CDAbstractFactory Instance{
      get 
      {
         if (instance == null)
         {
             instance = new CDAbstractFactory();
         }
         return instance;
      }
   }

        



    }
}