public class PortfolioContext : DbContext
{
    public PortfolioContext(DbContextOptions<PortfolioContext> options) : base(options) { }
    public DbSet<Project> Projects { get; set; }
    public DbSet<About> Abouts { get; set; }
    public DbSet<ContactSubmission> ContactSubmissions { get; set; }
}