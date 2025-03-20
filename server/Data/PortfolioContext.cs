using Microsoft.EntityFrameworkCore;
using PortfolioApi.Models;

namespace PortfolioApi.Data // Ensure this is present
{
    public class PortfolioContext : DbContext
    {
        public PortfolioContext(DbContextOptions<PortfolioContext> options) : base(options) { }

        public DbSet<Project> Projects { get; set; }
        public DbSet<About> Abouts { get; set; }
        // Add other DbSets as needed
    }
}
