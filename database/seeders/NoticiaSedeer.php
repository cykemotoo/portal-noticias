<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("noticias")->insert([
            [
                'titulo' => 'IA Brasileira Desenvolve Código 40% Mais Rápido',
                'resumo' => 'Startup nacional apresenta modelo de IA capaz de acelerar o desenvolvimento de software.',
                'conteúdo' => 'Uma startup brasileira anunciou uma nova inteligência artificial especializada em desenvolvimento de software. Segundo a empresa, a ferramenta consegue reduzir em até 40% o tempo de criação de aplicações corporativas, automatizando tarefas repetitivas e sugerindo melhorias de arquitetura em tempo real. Especialistas acreditam que a solução pode aumentar significativamente a produtividade das equipes de tecnologia.',
                'imagem' => 'https://picsum.photos/800/600?random=1',
                'categoria_id' => '1',
                'usuario' => '1',
                'ativo' => '1',
                'created_at' => now(),
                'update_at' => now()
            ],
            [
                'titulo' => 'Nova Bateria para Smartphones Promete 7 Dias de Uso',
                'resumo' => 'Pesquisadores criam tecnologia que aumenta drasticamente a autonomia dos dispositivos móveis.',
                'conteúdo' => 'Cientistas anunciaram uma bateria baseada em novos materiais semicondutores que pode manter smartphones funcionando por até sete dias com uma única carga. A inovação também reduz o tempo de recarga para menos de 15 minutos e aumenta a vida útil do componente em comparação às baterias tradicionais de íons de lítio.',
                'imagem' => 'https://picsum.photos/800/600?random=2',
                'categoria_id' => '2',
                'usuario' => '1',
                'ativo' => '1',
                'created_at' => now(),
                'update_at' => now()
            ],
            [
                'titulo' => 'Empresa Lança Óculos de Realidade Aumentada para Trabalho Remoto',
                'resumo' => 'Dispositivo combina videoconferência, produtividade e colaboração em ambientes virtuais.',
                'conteúdo' => 'Uma empresa de tecnologia apresentou um novo modelo de óculos de realidade aumentada voltado para profissionais que trabalham remotamente. O equipamento permite visualizar múltiplas telas virtuais, realizar reuniões imersivas e compartilhar documentos em tempo real. A expectativa é que a solução ganhe espaço em setores como engenharia, educação e design.',
                'imagem' => 'https://picsum.photos/800/600?random=3',
                'categoria_id' => '3',
                'usuario' => '1',
                'ativo' => '1',
                'created_at' => now(),
                'update_at' => now()
            ],
            [
                'titulo' => 'Computação Quântica Alcança Marco Histórico em Processamento',
                'resumo' => 'Novo processador quântico supera limites anteriormente considerados inviáveis.',
                'conteúdo' => 'Pesquisadores revelaram um processador quântico capaz de executar cálculos complexos em poucos segundos, tarefas que levariam anos para computadores convencionais. O avanço representa um passo importante para aplicações em criptografia, simulações científicas e otimização logística. A comunidade tecnológica acompanha os resultados com grande expectativa.',
                'imagem' => 'https://picsum.photos/800/600?random=4',
                'categoria_id' => '4',
                'usuario' => '1',
                'ativo' => '1',
                'created_at' => now(),
                'update_at' => now()
            ],
            [
                'titulo' => 'Plataforma de Cibersegurança Detecta Ataques Antes da Execução',
                'resumo' => 'Solução usa aprendizado de máquina para identificar ameaças em tempo real.',
                'conteúdo' => 'Uma nova plataforma de cibersegurança está chamando atenção por sua capacidade de prever ataques digitais antes que eles ocorram. Utilizando algoritmos avançados de aprendizado de máquina, o sistema analisa padrões suspeitos na rede e bloqueia potenciais invasões automaticamente. Empresas dos setores financeiro e de saúde já iniciaram projetos-piloto com a tecnologia.',
                'imagem' => 'https://picsum.photos/800/600?random=5',
                'categoria_id' => '5',
                'usuario' => '1',
                'ativo' => '1',
                'created_at' => now(),
                'update_at' => now()
                
            ]
        ]);
    }
}
