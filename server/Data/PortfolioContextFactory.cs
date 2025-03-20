using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Design;
using PortfolioApi.Data; // Add this

public class PortfolioContextFactory : IDesignTimeDbContextFactory<PortfolioContext>
{
    public PortfolioContext CreateDbContext(string[] args)
    {
        var optionsBuilder = new DbContextOptionsBuilder<PortfolioContext>();
        optionsBuilder.UseNpgsql("Host=localhost;Database=portfolio;Username=postgres;Password=password");
        return new PortfolioContext(optionsBuilder.Options);
    }
}
