use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubesTable extends Migration
{
    public function up()
    {
        Schema::create('clubes', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(false);
            $table->decimal('saldo_disponivel', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clubes');
    }
}
