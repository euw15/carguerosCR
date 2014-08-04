using CarguerosWebServer.Models;
using System.Data;
using MySql.Data.MySqlClient;
using CarguerosWebServer.Querys;

using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;


namespace CarguerosWebServer.Services
{
    public class CDAccessBilling : CDBillingRepository
    {
        public const string CacheKey = "BillingStore";
        public QueryManager queryBilling;


        public CDAccessBilling()
        {
           // System.Diagnostics.Debug.WriteLine("Holaaaaaa");
            showViewBilling();
          
        }

        public override void showViewBilling()
        {
            this.queryBilling = new QueryManager();
            DataSet dataSet = queryBilling.getDataSetTableBilling();
            List<Billing> listBilling = getTableBilling(dataSet);    
            var ctx = HttpContext.Current;            
            if (ctx != null)
            {
                if (ctx.Cache[CacheKey] == null)
                {
                    ctx.Cache[CacheKey] = listBilling.ToArray();                     
                }
            }
        }

        public override List<Billing> getTableBilling(DataSet dataSet)
        {
            List<Billing> listBilling = new List<Billing>();
            foreach (DataTable table in dataSet.Tables)
            {
                foreach (DataRow row in table.Rows)
                {
                    int idBilling = Convert.ToInt32(row[0]);
                    int tax = Convert.ToInt32(row[1].ToString());
                    int costStorage = Convert.ToInt32(row[2].ToString());
                    int discount = Convert.ToInt32(row[3].ToString());
                    int freight = Convert.ToInt32(row[4].ToString());                   
                    listBilling.Add(new Billing{
                        idBilling = idBilling,
                        tax = tax,
                        costStorage = costStorage,
                        discount = discount,
                        freight = freight
                    }
                    );
                }
            }
            return listBilling;
        }

        public override Billing[] GetAllContacts()
        {
            var ctx = HttpContext.Current;

            if (ctx != null)
            {
                return (Billing[])ctx.Cache[CacheKey];
            }
            return new Billing[]
        {
            new Billing
            {
                idBilling = 0,
                tax = 0,
                costStorage = 0,
                discount = 0,
                freight = 0
            }
        };
        }       
    }
}